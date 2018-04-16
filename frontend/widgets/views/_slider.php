

<?
   use yii\helpers\Html;
   use yii\helpers\Url;
   ?>
<!-- caroslider -->
<!-- layerslider -->
<section id="slider" class="hidden-xs">
   <div id="full-slider-wrapper">
      <div id="layerslider" style="width:100%;height:500px;">
         <? foreach ($sliders as $slider):?>
         <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
            <img src="<?= Url::to('@web/')?>images/sliderimages/bg2.png" class="ls-bg" alt="Slide background" />
            <h3 class="ls-l" style="left:50px; top:135px; padding: 15px; color: #fff;font-size: 24px; font-weight: bold; text-transform: uppercase;" data-ls="offsetxin:0;durationin:2500;delayin:500;durationout:750;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotateout:-90;transformoriginout:left bottom 0;"><?= $slider->langTitle(); ?> </h3>
            <strong class="ls-l" style="font-weight:600;left:62px; top:250px; opacity: 1;width: 450px; color: #fff; font-size: 14px;" data-ls="offsetyin:top;durationin:4000;rotateyin:90;rotateyout:-90;durationout:1050;"><?= $slider->langMinidesc(); ?></strong>
            <a target="_blank" href="<?= $slider->alias; ?>" class="ls-l button" style="border-radius:4px;text-align:center;left:63px; top:315px;background: #0757a8;color: #ffffff;font-family: 'Open Sans';font-size: 14px;display: inline-block; text-transform: uppercase; font-weight: bold;" data-ls="durationout:850;offsetxin:90;offsetxout:-90;duration:4200;fadein:true;fadeout:true;"><?= Yii::t('app', 'Read More')?> </a>
            <img class="ls-l" src="<?= Url::to('@web/images/slider/'.$slider->img)?>" alt="layer 1" style="top:55px; left:700px;" data-ls="offsetxin:right;durationin:3000; delayin:600;durationout:850;rotatexin:-90;rotatexout:90;" />
            <img class="ls-l ls-linkto-2" style="top:400px;left:50%;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;rotatein:-40;offsetxout:-50;rotateout:-40;" src="<?= Url::to('@web/')?>images/sliderimages/left.png" alt="" />
            <img class="ls-l ls-linkto-2" style="top:400px;left:52%;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;" src="<?= Url::to('@web/')?>images/sliderimages/right.png" alt="" />
         </div>
         <? endforeach; ?>
         
      </div>
   </div>
</section>
<!--end slider-->

