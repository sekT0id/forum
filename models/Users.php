<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 22.05.18
 * Time: 11:11
 */

namespace app\models;

use realize\base\Mysql;

class Users extends Mysql
{
    public static function tableName(): string
    {
        return 'users';
    }
}