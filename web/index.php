<?php
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

$cms = __DIR__ . '/../../cms';

require($cms . '/core/helpers/globals.php');
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require($cms . '/vendor/autoload.php');
require($cms . '/vendor/yiisoft/yii2/Yii.php');

$app = 'frontend';
$config = require(__DIR__ . '/../locals/config/merge-configs.php');

$application = new yii\web\Application($config);
$application->run();
