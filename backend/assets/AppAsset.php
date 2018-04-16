<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.css',
        'css/bootstrap.min.css',
        'css/animate.css',
        'css/admin.css',
        'css/jquerysctipttop.css',
        'plugins/kalendar/kalendar.css',
        'plugins/scroll/nanoscroller.css',
        'plugins/morris/morris.css',
    ];
    public $js = [
        'js/jquery-2.1.0.js',
        'js/bootstrap.min.js',
        'js/common-script.js',
        'js/jquery.slimscroll.min.js',
        'js/jquery.sparkline.js',
        'js/sparkline-chart.js',
        'js/graph.js',
        'js/edit-graph.js',
        'plugins/data-tables/jquery.dataTables.js',
        'plugins/data-tables/DT_bootstrap.js',
        'plugins/data-tables/dynamic_table_init.js',
        'plugins/edit-table/edit-table.js',
        'js/jPushMenu.js',
        'js/side-chats.js',
    ];
    public $depends = [
    ];
}
