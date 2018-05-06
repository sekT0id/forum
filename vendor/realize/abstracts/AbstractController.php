<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 03.05.18
 * Time: 11:45
 */

namespace realize\abstracts;

use app\assets\AppAsset;
use realize\base\BaseView;

abstract class AbstractController
{
    public $layout = null;

    /**
     * @param string $view Имя файла.
     * @param string $callerClass Имя вызвавшего класса.
     * @return string Путь к файлу.
     * @throws \Exception В случае отсутствия файла
     */
    protected function findViewFile(string $view, string $callerClass): string
    {
        $search  = ['Controller'];
        $replace = '';

        $callerClass = str_replace($search, $replace, $callerClass);
        $callerClass = lcfirst($callerClass);

        $serverRoot = $_SERVER['DOCUMENT_ROOT'];

        $path = $serverRoot . '/views/' . $callerClass . '/' . $view . '.php';

        try {
            if (!file_exists($path)) {
                throw new \Exception('Файл ' . $path . ' не найден.');
            }
        } catch (\Exception $error) {
            echo  'Ошибка: ' . $error->getMessage();
        }

        return $path;
    }

    /**
     * @param string $callerClass
     * @return string
     */
    protected  function findLayoutFile(string $callerClass)
    {
        $search  = ['Controller'];
        $replace = '';

        $layoutName = str_replace($search, $replace, $callerClass);
        $layoutName = lcfirst($layoutName);

        $serverRoot = $_SERVER['DOCUMENT_ROOT'];

        if ($this->layout) {
            $layoutName = $this->layout;
        }

        $path = $serverRoot . '/views/layouts/' . $layoutName . '.php';

        try {
            if (!file_exists($path)) {
                throw new \Exception('Файл ' .$path .  ' не найден.');
            }
        } catch (\Exception $error) {
            echo  'Ошибка: ' . $error->getMessage();
        }

        return $path;
    }

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
        $layoutPath = $this->findLayoutFile($callerClass);

        $view = new BaseView();

        // Регистрирую css и js
        $assets = new AppAsset();
        $assets->registerAssets($view);

        return $view->render($layoutPath, $viewPath, $params);
    }

    /**
     * @param string $action
     * @return mixed
     */
    public function run(string $action)
    {
        $actionName = 'action' . ucfirst($action);

        try {
            if (!method_exists($this, $actionName)) {
                throw new \Exception('Метод ' . $actionName .  ' не найден.');
            }
        } catch (\Exception $error) {
            echo  'Ошибка: ' . $error->getMessage();
        }

        return $this->$actionName();
    }
}