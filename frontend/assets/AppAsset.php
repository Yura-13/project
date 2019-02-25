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
        'css/animate.css',
        'css/style.css',
        'css/bootstrap.min.css',
        'css/classy-nav.min.css',
        'css/core-style.css',
        'css/font-awesome.min.css',
        'css/jquery-ui.min.css',
        'css/magnific-popup.css',
        'css/nice-select.css',
        'css/owl.carousel.css',
    ];
    public $js = [
        'js/popper.min.js',
        'js/plugins.js',

        'js/active.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
