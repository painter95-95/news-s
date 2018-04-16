<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ChildmenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="childmenu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'title_uz') ?>

    <?= $form->field($model, 'title_ru') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'menu_id') ?>

    <?php // echo $form->field($model, 'sort') ?>

    <?php // echo $form->field($model, 'target') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
