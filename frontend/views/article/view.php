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

<div class="container single-post padding-bottom-30">
    <div class="row">

        <div class="clearfix"></div>
        <div class="col-md-8 col-sm-7 padding-bottom-30">
            <div class="blog-excerpt">
                <div class="blog-single-head">
                    <h2><?=$model->langTitle();?></h2>
                    <div class="meta"><span class="author">by Davron.</span><span class="date"><?=$model->create_at;?></span><span class="comments">3</span></div>
                </div>

                <div class="post-share margin-bottom-30">
                    <a href="#"><i class="fa fa-facebook"></i> <?= Yii::t('app', 'Share');?></a>
                    <a href="#"><i class="fa fa-twitter"></i> Tweet</a>
                    <a href="#"><i class="fa fa-pinterest"></i> <?= Yii::t('app', 'Pin it');?></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                </div>

                <img src="<?=Url::to('@web/images/article/single/'.$model->logo)?>" class="img-responsive" alt="<?=$model->langTitle();?>"/>

                <div class="credit">
                    <p><?=$model->langMinidesc();?></span></p>
                </div>
                <h5><?=$model->cat->langName();?></h5>
                <div class="clearfix"></div>

                <?=$model->langDesc();?>

            </div>

            <div class="single-topic">
                <span><?= Yii::t('app', 'Topics');?>:</span>
                <ul class="tags">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">European Union</a></li>
                    <li><a href="#">Germany</a></li>
                </ul>
            </div>

            <div class="clearfix"></div>
            <div class="margin-bottom-10"></div>
            <div class="clearfix"></div>

            <div class="single-share">
                <span><?= Yii::t('app', 'Share');?>:</span>
                <div class="post-share">
                    <a href="#"><i class="fa fa-facebook"></i> <?= Yii::t('app', 'Share');?></a>
                    <a href="#"><i class="fa fa-twitter"></i> <?= Yii::t('app', 'Tweet');?></a>
                    <a href="#"><i class="fa fa-pinterest"></i> <?= Yii::t('app', 'Pin it');?></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
            <div class="margin-bottom-30"></div>
            <hr class="l4">
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-prev">
                        <i class="fa fa-angle-left"></i>
                        <span class="text-uppercase"><?= Yii::t('app', 'Previous');?></span>
                        <p><a href="#">These Are Some of the Best Drone Photos in the World</a></p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="blog-next text-right">
                        <i class="fa fa-angle-right"></i>
                        <span class="text-uppercase"><?= Yii::t('app', 'Next');?></span>
                        <p><a href="#">These Are Some of the Best Drone Photos in the World</a></p>
                    </div>
                </div>
            </div>
            <div class="margin-bottom-30"></div>
            <div class="post-subscribe margin-bottom-60">
                <h5><?= Yii::t("app", "Don't miss a story");?></h5>
                <p><?= Yii::t('app', 'Subscribe to our email newsletter:');?></p>

                <form>
                    <i class="fa fa-envelope"></i>
                    <input type="text" placeholder="<?= Yii::t("app", "Your Email address");?>">
                    <button type="submit"><?= Yii::t('app', 'Subscribe');?></button>
                </form>
                <span><?= Yii::t("app", "Don't worry we hate spam as much as you do");?></span>
            </div>
            <div class="margin-bottom-30"></div>
            <h3 class="heading-1"><span><?= Yii::t('app', 'Related Articles');?></span></h3>
            <div class="row margin-bottom-30">
                <div class="col-md-4">
                    <div class="layout_2--item">
                        <div class="thumb">
                            <a href="#" ><img src="<?=Url::to('@web/images/news/single/'.$model->logo)?>" class="img-responsive" alt=""></a>
                        </div>
                        <span class="cat">Business</span>
                        <h4><a href="#">Unilever Buys Dollar Shave Club for $1 Billion</a></h4>
                        <div class="meta"><span class="author">by Rana F.</span><span class="date">Sep. 28, 2016</span><span class="comments">2</span></div>
                    </div>
                </div>
            </div>
            <div class="margin-bottom-30"></div>
            <h3 class="heading-1"><span>5 <?= Yii::t('app', 'Comments');?></span></h3>

            <div class="comments-list margin-bottom-20">
               <?
               ///foreach ($comments as $k => $comment):

//if ($k !==0){break;}



  //             endforeach; ?>

            </div>

            <h3 class="heading-1"><span><?= Yii::t('app', 'Leave a reply');?></span></h3>

            <form class="post-comment-form">
                <label><?= Yii::t('app', 'Your message');?></label>
                <textarea></textarea>

                <div class="row">
                    <div class="col-md-6">
                        <label><?= Yii::t('app', 'Your Name');?></label>
                        <input type="text">
                    </div>

                    <div class="col-md-6">
                        <label><?= Yii::t('app', 'Your Email');?></label>
                        <input type="email">
                    </div>
                </div>

                <button type="submit"><?= Yii::t('app', 'Submit Comment');?></button>
            </form>
        </div>

        <?= \frontend\widgets\sideWidgets::widget();?>
    </div>
</div>
<!-- // CONTENT -->
