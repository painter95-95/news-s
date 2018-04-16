<?php
$this->title = Yii::t('app', 'Добавить {modelClass}: ', [
    'modelClass' => 'видео',
]) . $model->id;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


