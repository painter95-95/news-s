<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Achilov Davronbek">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<body>
<div class="wrapper">
    <!-- header menu -->
    <?= \frontend\widgets\navWidgets::widget();?>
    <!-- header menu -->
        <?= Alert::widget() ?>
        <?= $content ?>

    <!-- FOOTER -->
    <?= \frontend\widgets\footerWidgets::widget(); ?>
<!-- // FOOTER -->
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
