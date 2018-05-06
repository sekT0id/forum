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
    public $css = '';
    public $js = '';

    /**
     * @return string
     */
    public function registerCss()
    {
        ob_start();
        echo $this->css;
        return ob_end_flush();
    }

    /**
     * @return string
     */
    public function registerJs()
    {
        ob_start();
        echo $this->js;
        return ob_end_flush();
    }

    /**
     * @param string $view
     * @param array $params
     * @return string
     */
    public function renderContent(string $view, array $params = [])
    {
        ob_start();
        ob_implicit_flush(false);
        extract($params);
        require $view;
        return ob_get_clean();
    }

    /**
     * @param string $view Путь к view файлу
     * @param array $params Параметры для использования во view
     * @return string
     */
    public function render(string $layout, string $view, array $params = [])
    {
        ob_start();
        ob_implicit_flush(false);
        extract($params);
        $content = $this->renderContent($view, $params);
        require $layout;
        return ob_get_clean();
    }
}