<?
use yii\helpers\Url;
?>
<!-- PAGE HEADER -->
<div class="page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="bcrumbs">
                    <li><a href="#"><?=Yii::t('app', 'Home')?></a></li>
                    <li><a href="#"><?=$model->cat->langName();?></a></li>
                    <li><?=$model->langTitle();?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- // PAGE HEADER -->

<div class="container single-post padding-bottom-30" style="background: #fff; padding: 15px 10px">
    <div class="row">

        <div class="clearfix"></div>
        <div class="col-md-8 col-sm-7 padding-bottom-30">
            <div class="blog-excerpt">
                <div class="blog-single-head">
                    <h2><?=$model->langTitle();?></h2>
                    <div class="meta"><span class="date"><?=$model->create_at;?></span><span class="fa fa-eye"> <?= $model->viewLog($model->id); ?></span><span class="comments">3</span></div>
                </div>

                <img src="<?=Url::to('@web/images/news/original/'.$model->logo)?>" class="img-responsive" alt="<?=$model->langTitle();?>"/>

                <div class="credit">
                    <p><?=$model->langMinidesc();?></span></p>
                </div>
                <h5><?=$model->cat->langName();?></h5>
                <div class="clearfix"></div>

                <?=$model->langDesc();?>
                <div class="clearfix"></div>
                <p><strong><?= Yii::t('app', 'A source'); ?>:</strong> <a href="<?= $model->by;?>"><?= $model->by;?></a></p>
                <div class="margin-bottom-10"></div>
            </div>

        </div>
        <?= \frontend\widgets\sideWidgets::widget();?>
    </div>
</div>
<!-- // CONTENT -->
