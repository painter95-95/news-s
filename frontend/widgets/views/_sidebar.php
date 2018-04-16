<?
use yii\helpers\Url;
?>
<!-- SIDEBAR -->
<aside class="col-md-4 col-sm-5">
    <div class="side-widget margin-bottom-10">
        <h3 class="heading-1"><span><?=Yii::t('app','Most Popular');?></span></h3>

        <ul class="trending padding-top-30 padding-bottom-10">
           <!-- <?/* foreach ($news as $mas):*/?>
                <li>
                    <div class="thumb">
                        <div class="icon-24 video2"></div>
                        <div class="overlay-alt"></div>
                        <img src="<?/*= Url::to('@web/images/news/sidebar/'.$mas->logo)*/?>">
                    </div>
                    <h4><a href="<?/*= Url::toRoute(['site/news', 'id' => $mas->token])*/?>"><?/*=$mas->langTitle();*/?></a></h4>
                    <div class="meta"><span class="date"><?/*=$mas->create_at; */?></span> <span class="fa fa-eye"> <?/*= $mas->viewLog($mas->id); */?></span></div>
                </li>
            --><?/* endforeach; */?>
        </ul>
    </div>



<!--    <div class="side-widget margin-bottom-60">-->
<!--        <h3 class="heading-1"><span>--><?//=Yii::t('app','Follow Us');?><!--</span></h3>-->
<!--        <div class="side-share side-share2">-->
<!--            --><?// foreach ($follow as $soc):?>
<!--                <div class='share s_facebook'>-->
<!--                    <a href="--><?//= $soc->alias;?><!--"><i class="--><?//=$soc->icon; ?><!--"></i></a>-->
<!--                    <div class='counter c_facebook'></div>-->
<!--                    <a href="--><?//= $soc->alias;?><!--"><span>--><?//=Yii::t('app', 'followers');?><!--</span></a>-->
<!--                </div>-->
<!--            --><?// endforeach; ?>
<!--        </div>-->
<!--        <div class="clearfix"></div>-->
<!--    </div>-->
</aside>
<!-- // SIDEBAR -->