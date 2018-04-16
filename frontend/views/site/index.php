<?
use yii\helpers\Url;

?>

<div class="container margin-top-30">
    <div class="row">
        <div class="col-md-8">
            <div class="col-md-4 col-sm-4 hidden-xs">
                <div class="col-md-12 col-sm-12">
                    <div class="side-widget margin-bottom-10">
                        <h3 class="heading-1"><span><?=Yii::t('app', 'Categories')?></span></h3>
                        <ul class="categories">
                            <? foreach ($cat as $c): ?>
                                <li><a href="<?= Url::toRoute(['cat/view', 'token' =>$c->token])?>"><?=$c->langName();?></a> <span><?= $c->catItems($c->id);?></span></li>
                            <? endforeach; ?>
                            <div class="text-center"><a href="<?= Url::toRoute(['cat/index']);?>"><?= Yii::t('app', 'More');?> <i class="fa fa-angle-double-right"></i></a></div>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-12 side-widget">
                    <div class="ads1 ad-300 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<!--                        <span>--><!--</span>-->
                        <a href="<?= $reklama->leftsidebar->alias; ?>"><img src="<?= Url::to('@web/images/new/'.$reklama->leftsidebar->image)?>" class="img-responsive" alt="">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12 col-sm-12">

                    <div class="layout_1 margin-bottom-30">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="heading-1"><span><?=Yii::t('app', 'Top News')?></span></h3>
                                <div class="post-carousel-wrap">
                                    <div class="post-carousel">
                                        <? foreach ($news as $val):?>
                                            <div class="layout_1--item">
                                                <a href="<?=Url::toRoute(['site/news', 'id'=>$val->token]);?>">
                                                    <span class="badge text-uppercase badge-overlay badge-lifestyle"><?=$val->cat->langName();?></span>
                                                    <div class="overlay"></div>
                                                    <img src="<?= Url::to('@web/images/news/slide/'.$val->logo)?>" class="img-responsive" alt=""/>
                                                    <div class="layout-detail padding-25">
                                                        <h4><?=$val->cat->langName();?></h4>
                                                        <p><?=$val->langTitle();?></p>
                                                        <div class="meta"><span class="fa fa-eye"> <?= $val->viewLog($val->id); ?></span><span class="date"><?=$val->create_at;?></span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        <? endforeach; ?>
                                    </div>
                                    <a class="prev"><i class="fa fa-angle-left"></i></a>
                                    <a class="next"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="layout_2 margin-bottom-20">
                        <div class="row">
                            <? foreach ($news as $n_item):?>
                                <div class="col-md-6 col-sm-6">
                                    <div class="layout_2--item">
                                        <div class="thumb">
                                            <a href="<?=Url::toRoute(['site/news', 'id'=>$n_item->token])?>"><img src="<?=Url::to('@web/images/news/list/'.$n_item->logo);?>" class="img-responsive" alt=""/></a>
                                        </div>
                                        <span class="cat"><?=$n_item->cat->langName(); ?></span>
                                        <h4><a href="<?=Url::toRoute(['site/news', 'id'=>$n_item->token])?>"><?=$n_item->langTitle(); ?></a></h4>
                                        <div class="meta"><span class="date"><?=$n_item->create_at; ?></span><span class="fa fa-eye"> <?= $n_item->viewLog($n_item->id); ?></span><span class="comments">2</span></div>
                                    </div>
                                </div>
                            <? endforeach; ?>
                            <div class="text-center">
                                <a href="<?= Url::toRoute(['site/newsall']);?>">
                                    <?= Yii::t('app', 'More');?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layout_3 hidden-xs">
                <div class="row">
                    <? foreach ($articles_top as $art_val):?>
                        <div class="col-md-6 col-sm-6 margin-bottom-30">
                            <h3 class="heading-1"><span><?=$art_val->cat->langName();?></span></h3>
                            <div class="layout_3--item">
                                <div class="thumb">
                                    <a href="<?=Url::toRoute(['site/news', 'id'=>$art_val->token]);?>"><img src="<?=Url::to('@web/images/news/list/'.$art_val->logo)?>" class="img-responsive" alt=""/></a>
                                </div>
                                <span class="cat"><?=$art_val->cat->langName();?></span>
                                <h4><a href="<?=Url::toRoute(['site/news', 'id'=>$art_val->token]);?>"><?=$art_val->langtitle();?></a></h4>
                                <p>
                                    <?=$art_val->langminidesc();?>
                                </p>
                                <div class="meta"><span class="date"><?=$art_val->create_at;?></span><span class="fa fa-eye"> <?= $art_val->viewLog($art_val->id); ?></span></div>
                            </div>

                        </div>
                    <? endforeach; ?>
                    <div class="text-center padding-25">
                        <a href="" class="">
                            <?= Yii::t('app', 'More');?> <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <?= \frontend\widgets\sideWidgets::widget();?>
    </div>
</div>

<div class="video-carousel-wrap bg-dark">
    <div class="container">
        <h5><span><?= Yii::t('app', 'Video')?></span> <a href="#"><?= Yii::t('app', 'View All')?> <i class="fa fa-angle-right"></i></a></h5>
        <div class="clearfix"></div>
        <div class="col-md-8 col-sm-7 no-padding">
            <div class="video-container">
                <video id="video" width="400" onclick="togglePause()" controls>
                    <source src="video/1.mp4" type="video/mp4">
                </video>

                <? foreach ($videos as $video):?>
                    <div class="layout_1--item vc-item1">
                        <div class="video-play"></div>
                        <span class="badge text-uppercase badge-overlay badge-tech"><?=$video->cat->langName();?></span>
                        <div class="overlay"></div>
                        <img src="images/home/06/1.jpg" class="img-responsive" alt="" />
                        <div class="layout-detail padding-25">
                            <h4><?=$video->langTitle();?></h4>
                            <div class="meta"><span class="date"><?=$video->create_at; ?></span><span class="comments">3</span><span class="views">284</span></div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>

        <div class="col-md-4 col-sm-5 no-padding">

            <div class="now-playing">
                <i class="fa fa-play"></i>
                <p>Desktop Showdown: Apple's Siri vs. Microsoft's Cortana <span>20:45</span></p>
            </div>

            <div class="video-list">
                <ul>
                    <? foreach ($videos as $video2): ?>
                        <li class="vl-video1">
                            <div class="thumb">
                                <div class="overlay-alt"></div>
                                <div class="video-play-32"></div>
                                <img src="images/home/06/thumb/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <p>
                                <?=$video2->langTitle();?><span>20:45</span></p>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container more-posts padding-top-40 padding-bottom-60">
    <h3 class="heading-1"><span><?=Yii::t('app', 'You might also like');?></span></h3>
    <div class="row">
        <? foreach ($facts as $fact):?>
            <div class="col-md-4 col-sm-4">
                <div class="layout_3--item border">
                    <div class="thumb">
                        <div class="icon-24 video2"></div>
                        <a href="<?=Url::toRoute(['site/news', 'id'=>$fact->token]);?>"><img src="<?=Url::to('@web/images/news/list/'.$fact->logo);?>" class="img-responsive" alt=""/></a>
                    </div>
                    <span class="cat"><?=$fact->cat->langname();?></span>
                    <h4><a href="<?=Url::toRoute(['site/news', 'id'=>$fact->token]);?>"><?=$fact->langTitle();?></a></h4>
                    <div class="meta"><span class="date"><?= $fact->create_at; ?></span><span class="views"><?= $fact->viewLog($fact->id); ?></span></div>
                </div>
            </div>
        <? endforeach; ?>
        <div class="col-md-4 col-sm-4 margin-bottom-30">
            <div class="ads1 ad-300">
                <!--<span><?//= Yii::t('app', '');?></span>-->
                <a href="<?= $reklama->bottom->alias; ?>"><img src="<?= Url::to('@web/images/new/'.$reklama->bottom->image)?>" class="img-responsive" alt=""/></a>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="<?= Url::toRoute(['site/index', 'id'=> 3]);?>">
            <?= Yii::t('app', 'More');?> <i class="fa fa-angle-double-right"></i></a>
    </div>
</div>