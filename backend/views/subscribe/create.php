<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Subscribe */

$this->title = Yii::t('app', 'Create Subscribe');
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
