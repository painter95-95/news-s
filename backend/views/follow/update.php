<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Follow */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Follow',
]) . $model->name;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
