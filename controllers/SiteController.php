<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 03.05.18
 * Time: 15:32
 */

namespace app\controllers;

use realize\base\BaseController;
use realize\base\BaseModel;

use app\models\Users;

class SiteController extends BaseController
{
    public function actionIndex()
    {
        $model = new BaseModel();
        $model->load($_POST);

        $user = Users::find()
            ->select(['id', 'name'])
            ->where(['id' => 1])
            ->one();

        return $this->render('index', [
            'model' => $model,
            'user'  => $user,
        ]);
    }
}