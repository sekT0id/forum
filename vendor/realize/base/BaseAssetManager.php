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
     * @return string
     */
    public function renderCss(): string
    {
        // TODO: Implement renderCss() method.
        $str = '';
        $count = count($this->css);

        for($i = 0; $i < $count; $i++) {
            $elem = $this->css[$i];
            $str = $str . '<link href=' . $elem . ' type="text/css" rel="stylesheet">';
        }

        return $str;

    }

    public function renderJs(): string
    {
        // TODO: Implement renderJs() method.
        $str = '';

        foreach ($this->depends as $elem) {
            $str = $str . '<script type="text/javascript" src="' . $elem . '"></script>';
        }

        foreach ($this->js as $elem) {
            $str = $str . '<script type="text/javascript" src="' . $elem . '"></script>';
        }

        return $str;
    }
}