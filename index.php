<?php
require 'vendor/realize/abstracts/AbstractController.php';
require 'vendor/realize/abstracts/AbstractView.php';
require 'vendor/realize/abstracts/AbstractAssetsManager.php';

require 'vendor/realize/base/BaseController.php';
require 'vendor/realize/base/BaseView.php';
require 'vendor/realize/base/BaseAssetManager.php';

require 'assets/AppAsset.php';

require 'controllers/SiteController.php';


use app\controllers\SiteController;

$controller = new SiteController();
echo $controller->run('index');
