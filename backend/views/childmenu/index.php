<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Меню сайта';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contentpanel">
    <!--\\\\\\\ contentpanel start\\\\\\-->
    <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
            <h1>Меню сайта</h1>
            <h2 class="">Вы можете изменить меню сайта</h2>
        </div>
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="active">Меню сайта</li>
            </ol>
        </div>
    </div>
    <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->


        <div id="main-content">
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-web">
                            <div class="header">
                                <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="refresh" href="#"><i class="fa fa-repeat"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
                                <h3 class="content-header">Управление меню сайта</h3>
                            </div>
                            <div class="porlets-content">
                                <div class="adv-table editable-table ">
                                    <div class="clearfix">
                                        <div class="btn-group">
                                            <a id="editable-sample_new" href="<?= \yii\helpers\Url::toRoute(['childmenu/create'])?>" class="btn btn-primary">
                                                Добавить под меню <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="btn-group pull-right">
                                            <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#">Print</a></li>
                                                <li><a href="#">Save as PDF</a></li>
                                                <li><a href="#">Export to Excel</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="margin-top-10"></div>
                                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Названия меню</th>
                                            <th>Заглавие</th>
                                            <th>Адрес</th>
                                            <th>Вывод документа</th>
                                            <th class="hidden-phone">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?= \yii\widgets\ListView::widget([
                                            'dataProvider' => $dataProvider,
                                            'itemView'=>'_table',
                                        ]);
                                        ?>
                                        </tbody>
                                    </table>
                                </div><!--/table-responsive-->

                            </div><!--/porlets-content-->
                        </div><!--/block-web-->
                    </div><!--/col-md-12-->
                </div><!--/row-->
            </div><!--/row-->
        </div><!--/row-->
    </div></div>
