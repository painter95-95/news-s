<?
use yii\helpers\Url;
?>
<!-- SIDEBAR -->
<aside class="col-md-4 col-sm-5">
    <div class="ads ad-300 margin-bottom-60">
        <span><?=Yii::t('app','Advertisement');?></span>
        <a href="<?= $reklama->rightsidebar->alias;?>"><img src="<?= Url::to('@web/images/ads/'.$reklama->rightsidebar->image)?>" class="img-responsive" alt=""></a>
    </div>

    <div class="side-widget margin-bottom-60">
        <h3 class="heading-1"><span><?=Yii::t('app','Follow Us');?></span></h3>
        <div class="side-share side-share2">
            <? foreach ($follow as $soc):?>
            <div class='share s_facebook'>
                    <a href="<?= $soc->alias;?>"><i class="<?=$soc->icon; ?>"></i></a>
                <div class='counter c_facebook'></div>
                <a href="<?= $soc->alias;?>"><span><?=Yii::t('app', 'followers');?></span></a>
            </div>
            <? endforeach; ?>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="side-widget margin-bottom-30">
        <h3 class="heading-1"><span><?=Yii::t('app','Most Popular');?></span></h3>

        <ul class="trending padding-top-30 padding-bottom-30">
           <? foreach ($news as $mas):?>
            <li>
                <div class="thumb">
                    <div class="icon-24 video2"></div>
                    <div class="overlay-alt"></div>
                    <img src="<?= Url::to('@web/images/news/sidebar/'.$mas->logo)?>">
                </div>
                <h4><a href="<?= Url::toRoute(['news/view', 'id' => $mas->id])?>"><?=$mas->langTitle();?></a></h4>
                <div class="meta"><span class="date"><?=$mas->create_at; ?></span></div>
            </li>
            <? endforeach; ?>
        </ul>
    </div>

    <div class="side-widget margin-bottom-30">
        <h3 class="heading-1"><span><?=Yii::t('app','Trending Stories');?></span></h3>
        <ul class="trending-text">
            <? foreach ($articles as $article):?>
            <li>
                <em><?=$article->id;?></em>
                <p><a href="#"><?=$article->langTitle();?></a> <span><?=$article->create_at;?></span></p>
            </li>
            <? endforeach; ?>
        </ul>
    </div>
</aside>
<!-- // SIDEBAR -->