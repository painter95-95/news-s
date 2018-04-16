<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.css',
        'css/bootstrap.min.css',
        'css/animate.css',
        'css/admin.css',
    ];
    public $js = [
        'js/jquery-2.1.0.js',
        'js/bootstrap.min.js',
        'js/common-script.js',
        'js/jquery.slimscroll.min.js',
    ];
    public $depends = [
    ];
}
