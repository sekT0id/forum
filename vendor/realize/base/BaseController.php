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
        $page = lcfirst(substr($callerClass, 0, -10));
        $path = $_SERVER["DOCUMENT_ROOT"] . "/views/$page/$view.php";
        try {
            if (!file_exists($path)) {
                throw new \Exception("Указанный адрес не существует.");
            }
        }
        catch (\Exception $e) {
            echo $e->getMessage();
        }
        return $path;
    }
}
