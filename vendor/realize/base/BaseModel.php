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

    public $e_mail;
    public $password;
    public $confirm_password;
    public $user_name;
    public $sex;
    public $knownJs;
    public $knownCpp;
    public $knownPhp;
    public $about;

    public function load(array $data) : bool
    {
        // TODO: Implement load() method.

        var_dump($data);
        $i = 0;

        foreach ($data as $key => $value) {

            if (property_exists(self::class, $key)) {
                $this->$key = $value;
                $i++;
            }
        }


        var_dump($this->known_languages);

        if ($i > 0) {
            return true;
        }

        return false;
    }
}