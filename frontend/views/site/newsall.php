<?php

use yii\widgets\ListView;
use yii\helpers\Url;
$this->title = Yii::t('app', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- PAGE HEADER -->
<div class="page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-9">
                <ul class="bcrumbs">
                    <li><a href="<?= Url::to('@web/')?>"><?= Yii::t('app', 'Home');?></a></li>
                    <li><?= Yii::t('app', 'News');?></li>
                </ul>
                <br>
                <h2><?= Yii::t('app', 'News');?></h2>
            </div>
        </div>
    </div>
</div>
<!-- // PAGE HEADER -->

<!-- CATEGORY -->
<div class="container padding-bottom-30">
    <div class="row">
        <div class="col-md-8 col-sm-7 dual-posts padding-bottom-30">
            <? foreach ($models as $model): ?>
                <div class="row">
                    <div class="layout_3--item">
                        <div class="col-md-5 col-sm-6">
                            <div class="thumb">
                                <a href="<?=Url::toRoute(['news/news', 'id' => $model->id])?>">
                                    <img src="<?=Url::to('@web/images/news/list/'.$model->logo)?>" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-7 col-sm-6">
                            <span class="cat"><?=$model->cat->langname();?></span>
                            <h4><a href="<?=Url::toRoute(['news/news', 'id' => $model->id])?>"><?=$model->langTitle();?></a></h4>
                            <p><?=$model->langMinidesc();?>...</p>
                            <div class="meta wow fadeIn animated" style="visibility: visible;">
                                <span class="date"><?=$model->create_at;?></span><span class="views"><?= $model->viewLog($model->id); ?></span></div>
                        </div>
                    </div>
                </div>
                <hr class="l4">
            <? endforeach; ?>
            <?
            echo \yii\widgets\LinkPager::widget([
                'pagination' => $pages,
            ])
            ?>
        </div>
        <!-- // CATEGORY -->


        <!-- SIDEBAR -->
        <?= \frontend\widgets\sideWidgets::widget();?>
        <!-- // SIDEBAR -->

    </div>
</div>
<!-- // CONTENT -->

