<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = Yii::t('app', 'Обновить новости {modelClass}: ', [
    'modelClass' => 'News',
]) . $model->id;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

