<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Subscribe */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Subscribe',
]) . $model->id;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
