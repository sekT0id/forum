<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 06.05.18
 * Time: 22:32
 */

namespace realize\abstracts;


abstract class AbstractModel
{
    /**
     * Вхождение:
     *     Асоциативный массив key => value
     *     Им может быть любой из асоциативных
     *     Массивов - $_GET, $_POST, $_REQUEST.
     *
     * Задача:
     *     Обработать входящий массив.
     *     Разложить значения по публичным атрибутам модели.
     *
     * Возврат:
     *     true  - Успешной обработкой является заполнение любого 1 свойства модели.
     *     false - В случае неудачной обработки.
     *
     *
     * Дополнительно:
     *     Обрабатывать только аттрибуты, заранее описанные в модели.
     *
     * @param $attributes
     * @return bool
     */
    abstract function load(array $data) : bool;
}