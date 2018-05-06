<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 06.05.18
 * Time: 16:48
 */

namespace realize\abstracts;

use realize\base\BaseView;

abstract class AbstractAssetsManager
{
    public $js = [];

    public $css = [];

    public $depends = [];

    /**
     * @param BaseView $view
     */
    public function registerAssets(BaseView $view) : void
    {
        $view->css = $this->renderCss();
        $view->js  = $this->renderJs();
    }

    /**
     * Вхождение:
     *     $css - массив с полными путями к цсс файлам
     * Задача:
     *     Сформировать из массива $css строки вида
     *     <link href="<file>" type="text/css" rel="stylesheet">
     *
     * @return string
     */
    abstract function renderCss() : string;

    /**
     * Вхождение:
     *     $js - массив с полными путями к js файлам
     *     $depends - массив зависимостей (например jquery)
     * Задача:
     *     Сформировать из массива $js и $depends строки вида
     *     <script type="text/javascript" src="<file>"></script>
     *     Данные $depends должны обрабатываться в первую очередь.
     *
     * @return string
     */
    abstract function renderJs() : string;
}