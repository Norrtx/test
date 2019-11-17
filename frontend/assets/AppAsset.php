<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/siteh.css',
        'https://getbootstrap.com/2.3.2/assets/css/bootstrap.css',
    ];
    public $js = [
        'https://getbootstrap.com/2.3.2/assets/js/jquery.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
