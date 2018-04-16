<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Reklama */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="contentpanel">
    <!--\\\\\\\ contentpanel start\\\\\\-->
    <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title">
            <h1>Добавить новости</h1>
            <h2 class="">Напишите что нибуд...</h2>
        </div>
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Новости</a></li>
                <li class="active">Добавить новости</li>
            </ol>
        </div>
    </div>
    <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        <div class="row">
            <div class="col-md-12">
                <div class="porlets-content">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class'=>'col-md-10 col-md-offset-1', 'style' => 'background: #FFFFFF']]); ?>
                    <div class="header">
                        <h3 class="content-header" style="padding: 20px;">Заполните форму</h3>
                    </div>
                    <div class="porlets-content">
                        <div style="float: right; margin-bottom: 10px">
                            <?= Html::a(Yii::t('app', 'Home'), ['index'], ['class' => 'btn btn-primary']) ?>
                        </div>
                        <?= $form->field($model, 'image')->fileInput(['multiple' => true, ]) ?>
                        <hr>

                        <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>
                        <?$items_d = [
                            'banner' => 'Вверхный блок (баннер 670х90 )',
                            'right_sidebar' => 'Правый блок сайта (Sidebar 300х250 )',
                            'left_sidebar' => 'Левый блок сайта (после категория 181х209 )',
                            'bottom' => 'Ныжный блок сайта (Внутри факты 300х250 )',

                        ];
                        $params_d = [
                            'prompt' => 'Место реклама',
                        ];
                        echo $form->field($model, 'type')->dropDownList($items_d,$params_d);
                        ?>
                        <?$items_d = [
                            '0' => 'Не активный',
                            '1' => 'Активный',

                        ];
                        $params_d = [
                            'prompt' => 'Статус вкл./откл.',
                        ];
                        echo $form->field($model, 'status')->dropDownList($items_d,$params_d);
                        ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

                        <?php ActiveForm::end(); ?>
                    </div><!--/porlets-content-->
                </div><!--/col-md-12-->
            </div><!--/row-->
        </div>
        <!--\\\\\\\ container  end \\\\\\-->
    </div>