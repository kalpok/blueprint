<?php

namespace theme\assetbundles;

use yii\web\AssetBundle;

class ThemeAssetBundle extends AssetBundle
{
    public $sourcePath = '@theme/assets';
    public $css = [
        'css/modern-business.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'theme\assetbundles\IEAssetBundle',
        'theme\assetbundles\FontAwesomeAsset'
    ];
}
