<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Follow */

$this->title = Yii::t('app', 'Create Follow');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Follows'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


