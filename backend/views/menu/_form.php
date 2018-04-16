<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contentpanel">
    <!--\\\\\\\ contentpanel start\\\\\\-->
    <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
            <h1>Создать меня сайта</h1>
            <h2 class="">Добавить меню, укажите ссилку, укажите место сортировку</h2>
        </div>
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">FORMS</a></li>
                <li class="active">Components</li>
            </ol>
        </div>
    </div>
    <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->


        <div class="row">
            <div class="col-md-6">
                <div class="block-web">
                    <div class="header">
                        <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
                        <h3 class="content-header">Добавить новый пункт меню</h3>
                    </div>
                    <div class="porlets-content">
    <?php $form = ActiveForm::begin(); ?>


                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active"><a href="#russian" aria-controls="russian" role="tab" data-toggle="tab">Русский</a></li>
                            <li role="presentation"><a href="#uzbek" aria-controls="uzbek" role="tab" data-toggle="tab">Ўзбекча лотин</a></li>
                            <li role="presentation"><a href="#kiril" aria-controls="kiril" role="tab" data-toggle="tab">Ўзбекча кирил</a></li>
                            <li role="presentation"><a href="#korean" aria-controls="korean" role="tab" data-toggle="tab">Korean</a></li>
                            <li role="presentation"><a href="#english" aria-controls="english" role="tab" data-toggle="tab">English</a></li>
                        </ul>
                        <div class="tab-content bg-white p-15">
                            <div role="tabpanel" class="tab-pane active" id="russian">
                                <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="uzbek">
                                <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="kiril">
                                <?= $form->field($model, 'name_uc')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'title_uc')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="korean">
                                <?= $form->field($model, 'name_cor')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'title_cor')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="english">
                                <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
                            </div>
                            <!-- /.section-title -->
                        </div>


    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'target')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Создать') : Yii::t('app', 'Изменить'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
</div>
</div>
</div>
