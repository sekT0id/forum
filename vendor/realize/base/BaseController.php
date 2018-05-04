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
        // TODO: Implement findViewFile() method.
        $rep = $_SERVER['DOCUMENT_ROOT'];
        $callerClass = substr_replace($callerClass, "", -10, 10 );
        $callerClass = lcfirst($callerClass);
        $way = $rep . "/views/" . $callerClass . "/" . $view . ".php";


        try {
            if (!(file_exists($way))) {
                throw new \Exception("Файл не найден");
            }


            var_dump($way);
            return $way;

        } catch (\Exception $e) {
            echo "Ошибка: " . $e->getMessage();
        }

    }
}