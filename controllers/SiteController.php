<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 03.05.18
 * Time: 15:32
 */

namespace app\controllers;

use realize\base\BaseController;

class SiteController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index', [
            'id'   => 10,
            'text' => 'hello',
        ]);
    }
}