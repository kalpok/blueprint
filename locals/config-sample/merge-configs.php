<?php
use yii\helpers\ArrayHelper;

$config = yii\helpers\ArrayHelper::merge(
    require($cms . '/config/common.php'),
    require($cms . '/config/' . $app . '.php'),
    require(__DIR__ . '/common.php'),
    require(__DIR__ . '/' . $app . '.php')
);
$config['components']['urlManager']['rules'] = array_reverse(
	$config['components']['urlManager']['rules']
);

return $config;
