<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Uzkorea.com | Факты';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="contentpanel">
        <!--\\\\\\\ contentpanel start\\\\\\-->
        <div class="pull-left breadcrumb_admin clear_both">
            <div class="pull-left page_title theme_color">
                <h1>База данных</h1>
            </div>
            <div class="pull-right">
                <ol class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li class="active">Факты</li>
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
                                    <h3 class="content-header">Отзывчивая таблица с расширяемыми деталями</h3>
                                </div>
                                <div class="porlets-content">

                                    <div class="table-responsive">
                                        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                            <thead>
                                            <tr>
                                                <th>№ <i class="fa fa-sort-amount-asc"></i></th>
                                                <th class="hidden-phone">Фото</th>
                                                <th>Названия</th>
                                                <th>Мини описания</th>
                                                <th style="display: none;">Описания</th>
                                                <th class="hidden-phone">Дата</th>
                                                <th class="hidden-phone">Категория</th>
                                                <th>Действие</th>
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