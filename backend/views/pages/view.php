<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->name;
?>
<div class="contentpanel">
    <!--\\\\\\\ contentpanel start\\\\\\-->
    <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
            <h1>Информация о <?= $model->langTitle();?></h1>
            <h2 class="">Вы можете редактировать всех данных сайта</h2>
        </div>
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="active">Информация о <?= $model->langTitle();?></li>
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
                                    <h3 class="content-header"><?= $model->langTitle();?></h3>
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


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'title_uz',
            'title_ru',
            'title_en',
            'title_uc',
            'desc_uz:ntext',
            'desc_en:ntext',
            'desc_ru:ntext',
            'desc_uc:ntext',
            'logo',
            'post_id',
            'alias',
        ],
    ]) ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>