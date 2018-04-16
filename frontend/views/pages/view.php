<?
use yii\helpers\Url;
?>
<!-- PAGE HEADER -->
<div class="page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="bcrumbs">
                    <li><a href="<?= Url::toRoute(['site/index'])?>"><?=Yii::t('app', 'Home')?></a></li>
                    <li><a href="<?= Url::toRoute(['pages/index'])?>"><?=Yii::t('app', 'Pages')?></a></li>
                    <li><?=$model->langTitle();?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container single-post padding-bottom-30">
    <div class="row">

        <div class="col-md-12 margin-bottom-30">
           <img src="<?= Url::to('@web/images/pages/'.$model->logo)?>" class="img-responsive" alt=""/>
        </div>
        <div class="col-md-12"><p><?=$model->langDesc();?></p></div>

        <div class="clearfix"></div>

    </div>
</div>
<!-- // CONTENT -->