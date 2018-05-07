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
     * @return string
     */
    public function renderCss() : string
    {
        $result = '';
        if (is_array($this->css)) {
            foreach ($this->css as $css) {
                $result = $result
                    . '<link href="'
                    . $css
                    . '" type="text/css" rel="stylesheet">';
            }
        }

        return $result;
    }

    /**
     * @return string
     */
    public function renderJs() : string
    {
        $result = '';

        if (is_array($this->depends)) {
            foreach ($this->depends as $depend) {
                $result = $result
                    . '<script src="'
                    . $depend
                    . '" type="text/javascript"></script>';
            }
        }

        if (is_array($this->js)) {
            foreach ($this->js as $js) {
                $result = $result
                    . '<script src="'
                    . $js
                    . '" type="text/javascript"></script>';
            }
        }

        return $result;
    }
}