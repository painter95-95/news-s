<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Reklama */

$this->title = Yii::t('app', 'Create Reklama');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reklamas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


