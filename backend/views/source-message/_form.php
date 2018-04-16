<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SourceMessage */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="contentpanel">
    <!--\\\\\\\ contentpanel start\\\\\\-->
    <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
            <h1>Components</h1>
            <h2 class="">Subtitle goes here...</h2>
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




                        <section class="panel blue_title form-tab">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Текст для перевода (English)</label>
                            <div class="col-sm-7">
                                <?= $form->field($model, 'message')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                        </div>
                            <div class="panel-heading">portlet<span class="semi-bold"> Tabs</span> </div>
                            <div class="panel-body">
                                <ul class="nav nav-tabs" id="myTab" style="color: #000000;">
                                    <li class="active"><a data-toggle="tab" href="#Tab1">Русский</a></li>
                                    <li class=""><a data-toggle="tab" href="#Tab2">Ўзбекча кирил</a></li>
                                    <li class=""><a data-toggle="tab" href="#Tab3">O'zbekcha lotin</a></li>
                                    <li class=""><a data-toggle="tab" href="#Tab4">Korean</a></li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div id="Tab1" class="tab-pane fade active in">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Русский</label>
                                                    <div class="col-sm-7">
                                                        <textarea name="ru_text" class="form-control" placeholder="Text"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="Tab2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Ўзбекча кирил</label>
                                                    <div class="col-sm-7">
                                                        <textarea name="uc_text" class="form-control" placeholder="Text"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Tab3" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">O'zbekcha lotin</label>
                                                    <div class="col-sm-7">
                                                        <textarea name="uz_text" class="form-control" placeholder="Text"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Tab4" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Korean</label>
                                                    <div class="col-sm-7">
                                                        <textarea name="kor_text" class="form-control" placeholder="Text"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </section>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
</div>
</div>
</div>
</div>
</div>

