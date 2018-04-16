<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contentpanel">
    <!--\\\\\\\ contentpanel start\\\\\\-->
    <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
            <h1>Список лекарств</h1>
            <h2 class="">Вы можете редактировать всех лекарств сайта</h2>
        </div>
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="active">Список лекарств</li>
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
                                <h3 class="content-header">Список лекарств </h3>
                            </div>
                            <div class="porlets-content">
                                <div class="adv-table editable-table ">
                                    <div class="clearfix">
                                        <div class="btn-group">
                                            <button id="editable-sample_new" class="btn btn-primary">
                                                Добавить лекарство на базе  <i class="fa fa-plus"></i>
                                            </button>
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
                                            <th>Фото</th>
                                            <th>Названия</th>
                                            <th>Заглавие</th>
                                            <th>Дата выпуска</th>
                                            <th class="hidden-phone">Дата</th>
                                            <th class="hidden-phone">Действие</th>
                                        </tr>
                                        </thead>
                                        <thead>
                                        <?= \yii\widgets\ListView::widget([
                                            'dataProvider' => $dataProvider,
                                            'itemView'=>'_table',
                                            'pager' => [
                                                'firstPageLabel' => '<i class="fa fa-angle-double-left"></i>',
                                                'lastPageLabel' => '<i class="fa fa-angle-double-right"></i>',
                                                'prevPageLabel' => '<i class="fa fa-chevron-left"></i>',
                                                'nextPageLabel' => '<i class="fa fa-chevron-right"></i>',
                                                'maxButtonCount' => 6,
                                            ],
                                        ]);
                                        ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div><!--/porlets-content-->
                        </div><!--/block-web-->
                    </div><!--/col-md-12-->
                </div><!--/row-->
            </div><!--/row-->
        </div><!--/row-->
    </div></div>
<?
$script = <<< JS
   jQuery(document).ready(function() {
              EditableTable.init();
          });
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);