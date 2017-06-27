<?php

namespace themes\modernBusiness\assetbundles;

use yii\web\AssetBundle;

class ThemeAssetBundle extends AssetBundle
{
    public $sourcePath = '@themes/modernBusiness/assets';
    public $css = [
        'css/modern-business.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'themes\modernBusiness\assetbundles\IEAssetBundle',
        'themes\modernBusiness\assetbundles\FontAwesomeAsset'
    ];
}
