<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 06.05.18
 * Time: 18:49
 */

namespace realize\base;

use realize\abstracts\AbstractAssetsManager;


class BaseAssetManager extends AbstractAssetsManager
{

    /**
     * Вхождение:
     *     $css - массив с полными путями к цсс файлам
     * Задача:
     *     Сформировать из массива $css строки вида
     *     <link href="<file>" type="text/css" rel="stylesheet">
     *
     * @return string
     */
    function renderCss(): string
    {
        // TODO: Implement renderCss() method.
        $styles = '';
        $count = count($this->css);
        for ($i=0; $i<$count; $i++) {
            $styles .=  "<link href=" . $this->css[$i] . " type='text/css' rel='stylesheet'>";
        }
        return $styles;
    }

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
    function renderJs(): string
    {
        // TODO: Implement renderJs() method.
        $scripts = '';
        foreach ($this->depends as $script) {
            $scripts.="<script type='text/javascript' src=" . $script. "></script>";
        }
        foreach ($this->js as $script) {
            $scripts.="<script type='text/javascript' src=" . $script. "></script>";
        }

        return $scripts;
    }
}