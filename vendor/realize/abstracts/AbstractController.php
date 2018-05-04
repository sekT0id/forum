<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 03.05.18
 * Time: 11:45
 */

namespace realize\abstracts;

use realize\base\BaseView;

abstract class AbstractController
{
    /**
     * Найти view файл по переданому имени.
     * 1. Сформировать путь к view по правилу
     *     /<путь до каталога проекта>/views/<callerClass>/<view>.php
     *     где:
     *         callerClass - имя контроллера, без слова controller
     *             SiteController  = site
     *             ForumController = forum
     *
     *         view - Имя view файла.
     *
     *
     * 2. Проверить наличие файла по указанному пути.
     * 3. Вернуть полное имя файла в случае нахождения, либо выбросить исключение об отсутствии файла.
     *
     * @param string $view Имя файла.
     * @return string Путь к файлу.
     * @throws \Exception В случае отсутствия файла
     */
    abstract protected function findViewFile(string $view, string $callerClass) : string;

    /**
     * @param $view
     * @param array $params
     * @return mixed
     */
    public function render(string $view, array $params = [])
    {
        // Определяю имя текущего класса.
        $callerClass = (new \ReflectionClass($this))->getShortName();

        // Формирую путь к view файлу.
        $viewPath = $this->findViewFile($view, $callerClass);

        $view = new BaseView();

        return $view->render($viewPath, $params);
    }

    /**
     * @param string $action
     * @return mixed
     */
    public function run(string $action)
    {
        $actionName = 'action' . ucfirst($action);
        if (method_exists($this, $actionName)) {
            return $this->$actionName();
        }
    }
}