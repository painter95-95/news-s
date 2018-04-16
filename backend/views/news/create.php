<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = Yii::t('app', 'Create News');
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
