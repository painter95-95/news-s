<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Cat */

$this->title = Yii::t('app', 'Создат категория');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cat'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
