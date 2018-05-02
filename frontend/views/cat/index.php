<?php
use yii\helpers\Url;
$this->title = Yii::t('app', 'Cats');
?>
<!-- PAGE HEADER -->
<div class="page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-9">
                <ul class="bcrumbs">
                    <li><a href="<?= Url::to('@web/');?>"><?= Yii::t('app', 'Home');?></a></li>
                    <li><?= Yii::t('app', 'Categories');?></li>
                </ul>
                <br>
                <h2><?= Yii::t('app', 'News');?></h2>
            </div>
        </div>
    </div>
</div>
<!-- // PAGE HEADER -->
<!-- CATEGORY -->
<div class="container padding-bottom-30" style="background: #fff; padding: 15px 10px">
    <div class="row">
        <div class="col-md-8 col-sm-7 dual-posts padding-bottom-30">
            <? foreach ($news as $new):?>
            <div class="row">
                <div class="layout_3--item">
                    <div class="col-md-5 col-sm-6">
                        <div class="thumb">
                            <div class="icon-24 video2"></div>
                            <a href="<?= Url::toRoute(['news/view', 'id'=>$new->id])?>"><img src="<?=Url::to('@web/images/news/list/'.$new->logo);?>" class="img-responsive" alt="<?=$new->cat->langName();?>"/></a>
                        </div>
                    </div>

                    <div class="col-md-7 col-sm-6">
                        <span class="cat"><?=$new->cat->langName();?></span>
                        <h4><a href="<?= Url::toRoute(['news/news', 'id'=>$new->id])?>"><?=$new->langtitle();?></a></h4>
                        <p><?=$new->langMiniDesc();?></p>
                        <div class="meta"><span class="date"><?=$new->create_at;?></span><span class="views"><?= $new->viewLog($val->id); ?></span></div>
                    </div>
                </div>
            </div>

            <? endforeach; ?>
        <div class="col-md-5"></div> <a href="<?= Url::toRoute(['news/index'])?>" class="add-cart2 text-center"><?= Yii::t('app', 'More');?></a>
        </div>
        <!-- SIDEBAR -->
        <?= \frontend\widgets\sideWidgets::widget(); ?>
        <!-- // SIDEBAR -->
    </div>
</div>
<!-- // CATEGORY -->

<!-- // PAGE HEADER -->

