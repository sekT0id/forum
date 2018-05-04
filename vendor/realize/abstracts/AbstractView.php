<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 03.05.18
 * Time: 14:30
 */

namespace realize\abstracts;

abstract class AbstractView
{
    /**
     * @param array $css
     * @return string
     */
//    abstract public function renderCss(array $css) : string ;

    /**
     * @param array $js
     * @return string
     */
//    abstract public function renderJs(array $js) : string ;

    /**
     * @param string $view Путь к view файлу
     * @param array $params Параметры для использования во view
     * @return string
     */
    public function render(string $view, array $params = [])
    {
        ob_start();
        ob_implicit_flush(false);
        extract($params);
        require $view;
        return ob_get_clean();
    }
}