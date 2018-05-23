<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 22.05.18
 * Time: 10:05
 */

namespace realize\interfaces;


interface Db
{
    /**
     * @param array $params Массив полей для отображения.
     * @return db
     */
    public function select(array $queryParams = []) : self;

    /**
     * @param array $params Массив таблиц поиска.
     * @return db
     */
    public function from(array $queryParams = []) : self;

    /**
     * @param array $queryParams Массив условий поиска.
     * @return db
     */
    public function where(array $queryParams = []) : self;

    /**
     * Возвращает имя таблицы по умолчанию.
     *
     * @return string
     */
    public static function tableName() :string;

    /**
     * Хардкод запрос, получающий список столбцов таблицы.
     * Имя таблицы берем из tableName().
     *
     * @return array
     */
    public function tableSchema() : array;

    /**
     * Точка входа в построитель запроса.
     * Настройки подключения указать в config\db.php
     *
     * @return db
     */
    public static function find() : self;

    /**
     * Возвращает обект типа stdClass с заполненными данными.
     * Поля объекта соответствуют столбцам полей в таблице.
     *
     * @return object
     */
    public function one() : object ;

    /**
     * Возвращает массив объектов типа stdClass с заполненными данными.
     * Поля объектов соответствуют столбцам полей в таблице.
     *
     * @return array
     */
    public function all() : array;
}