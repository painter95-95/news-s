<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Reklama */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Reklama',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reklamas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


