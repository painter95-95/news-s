<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model common\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contentpanel">
    <!--\\\\\\\ contentpanel start\\\\\\-->
    <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title">
            <h1>Создать страница</h1>
        </div>
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li><a href="#">Страница</a></li>
                <li class="active">Создать страница</li>
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
                        <?= $form->field($model, 'logo')->fileInput(['multiple' => true, ]) ?>
                        <hr>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                        
                        <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active"><a href="#russian" aria-controls="russian" role="tab" data-toggle="tab">Русский</a></li>
                            <li role="presentation"><a href="#uzbek" aria-controls="uzbek" role="tab" data-toggle="tab">Ўзбекча лотин</a></li>
                            <li role="presentation"><a href="#kiril" aria-controls="kiril" role="tab" data-toggle="tab">Ўзбекча кирил</a></li>
                            <li role="presentation"><a href="#korean" aria-controls="korean" role="tab" data-toggle="tab">Korean</a></li>
                            <li role="presentation"><a href="#english" aria-controls="english" role="tab" data-toggle="tab">English</a></li>
                        </ul>
                        <div class="tab-content bg-white p-15">
                            <div role="tabpanel" class="tab-pane active" id="russian">

                                <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'desc_ru')->widget(CKEditor::className(), [
                                    'options' => ['rows' => 6],
                                    'preset' => 'custom'
                                ]) ?>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="uzbek">
                                <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'desc_uz')->widget(CKEditor::className(), [
                                    'options' => ['rows' => 6],
                                    'preset' => 'basic'
                                ]) ?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="kiril">
                                <?= $form->field($model, 'title_uc')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'desc_uc')->widget(CKEditor::className(), [
                                    'options' => ['rows' => 6],
                                    'preset' => 'basic'
                                ]) ?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="korean">
                                <?= $form->field($model, 'title_cor')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'desc_cor')->widget(CKEditor::className(), [
                                    'options' => ['rows' => 6],
                                    'preset' => 'custom'
                                ]) ?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="english">
                                <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'desc_en')->widget(CKEditor::className(), [
                                    'options' => ['rows' => 6],
                                    'preset' => 'custom'
                                ]) ?>
                            </div>
                            <!-- /.section-title -->
                        </div>


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