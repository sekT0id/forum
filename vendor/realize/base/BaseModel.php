<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 06.05.18
 * Time: 22:41
 */

namespace realize\base;

use realize\abstracts\AbstractModel;

class BaseModel extends AbstractModel
{
    public $email;
    public $password;
    public $confirmPassword;
    public $sex;
    public $lang;
    public $about;

    public function load(array $data): bool
    {
        $notEmpty = 0;
        foreach ($data as $field=>$value) {
            if (property_exists(self::class,$field)) {
                $this->$field = $value;
                $notEmpty = 1;
            }
        }
        return $notEmpty == 1 ? true : false;
    }

}