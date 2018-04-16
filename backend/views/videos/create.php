<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Videos */

$this->title = Yii::t('app', 'Добавить видео');
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>