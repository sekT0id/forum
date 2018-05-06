<?php
/**
 * Created by PhpStorm.
 * User: aleksandr.prusov
 * Date: 03.05.18
 * Time: 17:55
 */

namespace app\assets;

use realize\base\BaseAssetManager;

class AppAsset extends BaseAssetManager
{
    public $css = [
        '/web/css/bootstrap.min.css',
        '/web/css/starter-template.css',
    ] ;

    public $js = [
        '/web/js/jquery.coockie.js',
        '/web/js/popper.min.js',
        '/web/js/bootstrap.min.js',
    ];

    public $depends = [
        '/web/js/jquery.min.js',
    ];
}