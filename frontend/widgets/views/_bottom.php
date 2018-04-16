<?
use yii\helpers\Url;
?>
<section class="content content-with-sidebar related">
                         <div class="row secBg">
                             <div class="large-12 columns">
                                 <div class="main-heading borderBottom">
                                     <div class="row padding-14">
                                         <div class="medium-12 small-12 columns">
                                             <div class="head-title">
                                                 <i class="fa fa-film"></i>
                                                 <h4><?= Yii::t('app', 'Others')?> </h4>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="row list-group">
                                     <? foreach ($anons_all as $items):?>
                                     <div class="item large-4 columns end group-item-grid-default">
                                         <div class="post thumb-border">
                                             <div class="post-thumb">
                                                 <img src="<?= Url::to('@web/images/original/'.$items->img);?>" alt="landing">
                                                 <a href="<?= Url::toRoute(['site/video_view', 'id' => $items->id])?>" class="hover-posts">
                                                     <span><i class="fa fa-play"></i><?= Yii::t('app', 'Watch Video')?> </span>
                                                 </a>
                                                 
                                             </div>
                                             <div class="post-des">
                                                 <h6><a href="<?= Url::toRoute(['site/anons', 'id' =>$items->id])?>"><?=$items->langName();?> </a></h6>
                                                 
                                                 <div class="post-button">
                                                     <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video </a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     
									<? endforeach;?>
                                    

                                     

                                     
                                 </div>
                             </div>
                         </div>
                     </section>