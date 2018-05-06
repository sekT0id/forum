<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 03.05.18
 * Time: 15:22
 */

namespace realize\base;

use realize\abstracts\AbstractController;


class BaseController extends AbstractController
{
    protected function findViewFile(string $view, string $callerClass): string
    {
        $search  = ['controller'];
        $replace = '';

        $callerClass = str_replace($search, $replace, $callerClass);
        $callerClass = lcfirst($callerClass);

        $serverRoot = $_SERVER['DOCUMENT_ROOT'];

        $path = $serverRoot . '/views/' . $callerClass . '/' . $view . '.php';

        try {
            if (!file_exists($path)) {
                throw new \Exception('Файл ' .$path .  ' не найден.');
            }
            return $path;
        } catch (\Exception $error) {
            echo  'Ошибка: ' . $error->getMessage();
        }
    }
}
