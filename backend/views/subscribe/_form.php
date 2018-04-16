<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Subscribe */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="main-page">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-md-6">
                <h2 class="title">Добавить подписшики</h2>
                <p class="sub-title">One of the most complete bootstrap admin templates!</p>
            </div>
            <!-- /.col-md-6 text-right -->
        </div>
        <!-- /.row -->
        <div class="row breadcrumb-div">
            <div class="col-md-6">
                <ul class="breadcrumb">
                    <li><a href="<?= Url::to('@web/')?>"><i class="fa fa-home"></i> Главная</a></li>
                    <li class="active">Добавить подписшики</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

    <section class="section">
        <div class="container-fluid">



            <div class="row">
                <div class="col-md-8">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5>Добавить подписшики</h5>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class'=>'col-md-10 col-md-offset-1']]); ?>


    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'create_at')->textInput() ?>

    <?//= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'date_start')->textInput() ?>

    <?= $form->field($model, 'date_end')->textInput() ?>

                            <?
                            $items = \yii\helpers\ArrayHelper::map(\common\models\Cat::find()->all(), 'id', 'name_uz');
                            $params = [
                                'prompt' => 'Выберите категории'
                            ];
                            echo $form->field($model, 'cat_id')->dropDownList($items,$params);
                            ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->


        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.section -->

</div>
<!-- /.main-page -->
