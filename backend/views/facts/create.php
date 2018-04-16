<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Facts */

$this->title = Yii::t('app', 'Create Facts');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Facts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
