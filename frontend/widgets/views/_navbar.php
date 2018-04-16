 <?
 use yii\helpers\Url;
 ?>
 <div id="sidebar-wrapper">
     <ul class="nav navbar-nav">
         <li><a href="#">Главная</a></li>
         <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">World <span class="fa fa-angle-down"></span></a>
             <ul class="dropdown-content">
                 <li><a href="#">Politics</a></li>
                 <li><a href="#">Opinions</a></li>
                 <li><a href="#">Sports</a></li>
                 <li><a href="#">Local</a></li>
                 <li><a href="#">National</a></li>
                 <li><a href="#">World</a></li>
                 <li><a href="#">Business</a></li>
             </ul>
         </li>

         <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Politics <span class="fa fa-angle-down"></span></a>
             <ul class="dropdown-content">
                 <li><a href="#">Politics</a></li>
                 <li><a href="#">Opinions</a></li>
                 <li><a href="#">Sports</a></li>
                 <li><a href="#">Local</a></li>
                 <li><a href="#">National</a></li>
                 <li><a href="#">World</a></li>
                 <li><a href="#">Business</a></li>
             </ul>
         </li>

         <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sports <span class="fa fa-angle-down"></span></a>
             <ul class="dropdown-content">
                 <li><a href="#">Politics</a></li>
                 <li><a href="#">Opinions</a></li>
                 <li><a href="#">Sports</a></li>
                 <li><a href="#">Local</a></li>
                 <li><a href="#">National</a></li>
                 <li><a href="#">World</a></li>
                 <li><a href="#">Business</a></li>
             </ul>
         </li>

         <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Business <span class="fa fa-angle-down"></span></a>
             <ul class="dropdown-content">
                 <li><a href="#">Politics</a></li>
                 <li><a href="#">Opinions</a></li>
                 <li><a href="#">Sports</a></li>
                 <li><a href="#">Local</a></li>
                 <li><a href="#">National</a></li>
                 <li><a href="#">World</a></li>
                 <li><a href="#">Business</a></li>
             </ul>
         </li>

         <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opinion <span class="fa fa-angle-down"></span></a>
             <ul class="dropdown-content">
                 <li><a href="#">Politics</a></li>
                 <li><a href="#">Opinions</a></li>
                 <li><a href="#">Sports</a></li>
                 <li><a href="#">Local</a></li>
                 <li><a href="#">National</a></li>
                 <li><a href="#">World</a></li>
                 <li><a href="#">Business</a></li>
             </ul>
         </li>

         <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tech <span class="fa fa-angle-down"></span></a>
             <ul class="dropdown-content">
                 <li><a href="#">Politics</a></li>
                 <li><a href="#">Opinions</a></li>
                 <li><a href="#">Sports</a></li>
                 <li><a href="#">Local</a></li>
                 <li><a href="#">National</a></li>
                 <li><a href="#">World</a></li>
                 <li><a href="#">Business</a></li>
             </ul>
         </li>
         <li><a href="#">Lifestyle</a></li>
         <li><a href="#">Science</a></li>
         <li><a href="#">More</a></li>
     </ul>
 </div>
 <!-- // SIDE MENU -->

 <!-- HEADER / MENU -->
 <header class="header1 header-megamenu">
     <div class="topbar">
         <div class="container">
             <div class="row">
                 <div class="pull-left col-md-2 dropdown color-thema">
                     <a class="dropbtn"><i class="fa fa-language"></i> Ru</a>
                     <div class="dropdown-content">
                         <a href="#ru" class="language" id="en">English</a>
                         <a href="#ru" class="language" id="ru">Русский</a>
                         <a href="#korean" class="language" id="cor">Корейсча</a>
                         <a href="#uz" class="language" id="uc">Ўзбекча кирилча</a>
                         <a href="#uz" class="language" id="uz">O'zbekcha lotincha</a>
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-6 hidden-xs">
                     <div class="newsfeed">
                         <span><?= Yii::t('app', 'Latest news');?>:</span>
                         <div class="news-carousel">

                             <? foreach ($slide_news as $slide_new):?>
                                 <div class="item"><a href="<?= Url::toRoute(['site/news', 'id' => $slide_new->token]);?>"><?= $slide_new->langtitle();?></a></div>
                             <? endforeach; ?>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-4">
                     <div class="pull-right account-options img-m">
                         <a href="<?= Url::toRoute(['site/login'])?>"><i class="fa fa-unlock-alt"></i> <?= Yii::t('app', 'Sign In');?></a>
                         <span>|</span>
                         <a href="<?= Url::toRoute(['site/signup'])?>"><i class="fa fa-user-plus"></i> <?= Yii::t('app', 'Sign Up');?></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="clearfix"></div>
     <div class="navbar-header padding-vertical-10 hidden-xs">
         <div class="container">
             <div class="row">
                 <div class="col-md-5"  style="padding-right:0; margin-right:0;">
                     <div class="col-md-6" style="padding:0;margin:0;">
                         <a href="<?= Url::to('@web/')?>"><img src="<?=Url::to('@web/images/m-logo.png')?>" class="img-responsive" alt=""/></a>
                     </div>
                     <div class="col-md-6" style="padding: 0;margin:0;">
                         <a href="<?= Url::to('@web/')?>"><img src="<?=Url::to('@web/images/uzb.png')?>" class="img-responsive" style="margin-top:10px;" alt=""/></a>
                     </div>
                 </div>
                 <div class="ad-banner advert col-md-7 pull-left" style="padding: 0; margin-left:-50px;">
                     <?
                     if ($allbanner != null):
                         foreach ($allbanner as $banner):
                             ?>
                             <div class="item"><a target="_blank" href="<?= $banner->alias; ?>"><img src="<?=Url::to('@web/images/new/'.$banner->image)?>" alt=""/></a></div>
                         <? endforeach;
                     endif;
                     ?>
                 </div>
             </div>
         </div>
     </div>
     <div class="clearfix"></div>
     <div class="container">
         <div class="navbar-toggle">
				<span class="offset-trigger">
				<span></span>
				<span></span>
				<span></span>
				</span>
             <a class="img-m" href="<?= Url::to('@web/')?>"><img src="<?=Url::to('@web/images/m-logo.png')?>"  class="img-responsive" alt=""/></a>
         </div>
         <div class="search-wrap2">
             <form>
                 <input type="text" placeholder="Search by typing">
                 <div class="sw2-close"><span class="fa fa-close"></span></div>
             </form>
         </div>

         <div id="navbar" class="navbar-collapse collapse" style="background-color: rgb(56, 98, 163); color: rgb(255, 255, 255);">
             <ul class="nav navbar-nav">
                 <li class="dropdown">
                 <? foreach ($menu as $item_menu):?>
                 <li class="dropdown dropdown-v2">
                     <a class="dropdown-toggle" href="<?= $item_menu->url; ?>" alt="" style="color:#ffffff;"><?= $item_menu->langName(); ?></a>
                     <ul class="dropdown-menu">
                     </ul>
                 </li>
                 <? endforeach; ?>
                 </li>
                 <li class="pull-right hidden-xs">
                     <div class="search-trigger search-trigger2"><i class="fa fa-search"></i></div>
                 </li>
             </ul>
         </div>
     </div>
 </header>
 <!-- // HEADER / MENU -->