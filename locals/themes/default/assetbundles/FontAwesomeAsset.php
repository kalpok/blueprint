<?php
namespace theme\assetbundles;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@theme/assets';
    public $css = [
        'font-awesome-4.7.0/css/font-awesome.min.css',
    ];
}
