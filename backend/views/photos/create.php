<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Photos */

$this->title = Yii::t('app', 'Добавить фото');
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
