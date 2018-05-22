<?php
require 'vendor/realize/interfaces/Db.php';

require 'vendor/realize/abstracts/AbstractController.php';
require 'vendor/realize/abstracts/AbstractView.php';
require 'vendor/realize/abstracts/AbstractAssetsManager.php';
require 'vendor/realize/abstracts/AbstractModel.php';
require 'vendor/realize/abstracts/AbstractDb.php';

require 'vendor/realize/base/BaseController.php';
require 'vendor/realize/base/BaseView.php';
require 'vendor/realize/base/BaseAssetManager.php';
require 'vendor/realize/base/BaseModel.php';
require 'vendor/realize/base/Mysql.php';

require 'models/Users.php';

require 'assets/AppAsset.php';

require 'controllers/SiteController.php';

use app\controllers\SiteController;

$controller = new SiteController();
echo $controller->run('index');
