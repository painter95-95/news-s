<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Reklama */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reklama'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contentpanel">
    <!--\\\\\\\ contentpanel start\\\\\\-->
    <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
            <h1>Реклама</h1>
            <h2 class="">Вы можете редактировать всех данных сайта</h2>
        </div>
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="active">Реклама</li>
            </ol>
        </div>
    </div>
    <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->


        <div id="main-content">
            <div class="page-content">
                <div class="row">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-web">
                                <div class="header">
                                    <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="refresh" href="#"><i class="fa fa-repeat"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
                                    <h3 class="content-header">Реклама</h3>
                                </div>
                                <div class="porlets-content">
                                    <div style="float: right; margin-bottom: 10px">
                                        <?= Html::a(Yii::t('app', 'Home'), ['index'], ['class' => 'btn btn-primary']) ?>
                                        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                                        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                                            'class' => 'btn btn-danger',
                                            'data' => [
                                                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                                'method' => 'post',
                                            ],
                                        ]) ?>
                                    </div>
                                    <p>Click to edit</p>

                                    <table id="w0" class="table table-striped table-bordered detail-view"><tbody><tr><th>ID</th><td><?= $model->id; ?></td></tr>
                                        <tr><th>Image</th><td><img src="//www.uzkorea.com/images/ads/<?=$model->image; ?>"/></td></tr>
                                        <tr><th>Type</th><td>banner</td></tr>
                                        <tr><th>Status</th><td><? if ($model->status == 1){ echo "Активный";} if ($model->status == 0){ echo "Не активный";} ?></td></tr>
                                        <tr><th>Create At</th><td><?= $model->create_at; ?></td></tr>
                                        <tr><th>Update At</th><td><?= $model->update_at; ?></td></tr></tbody></table>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


