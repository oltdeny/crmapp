<?php

namespace app\assets;

use yii\web\AssetBundle;

class AssetClass extends AssetBundle
{
    public $sourcePath = '@app/assets';
    public $css = [
        'css/site.css',
        'ui/css/main.css'
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}