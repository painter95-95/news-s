<?
use yii\helpers\Url;
?>
<footer class="bg-dark footer1 padding-top-60">
    <div class="container">
        <div class="row margin-bottom-30">
            <div class="col-md-4 col-sm-4 margin-bottom-30 footer-info">
                <a style="background-color: #ffffff;" href="<?= Url::to('@web/');?>"><img src="<?=Url::to('@web/images/m-logo.png')?>" class="img-responsive" alt=""/></a>
                <br>
                <span><i class="fa fa-map-marker"></i> Toshkent Shahar, Yunusobod tumani,</span>
                <span><i class="fa fa-envelope"></i> <a href="mailto:info@as">info@sdf.com</a></span>
                <span><i class="fa fa-phone"></i> +998(71) 201 12 34</span>
            </div>

            <div class="col-md-4 col-sm-4 margin-bottom-30 footer-trending">
                <h5><?= Yii::t('app', 'Site Map');?></h5>
                <ul class="footers">
                    <?
                    foreach ($menu_model as $obj):
                        ?>
                        <li>
                            <h4><a href="<?= $obj->url; ?>"><?= $obj->langname(); ?></a></h4>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>

            <div class="col-md-4 col-sm-4 margin-bottom-30 footer-follow">
                <!--<h5><?/*= Yii::t('app', 'Follow Us')*/?></h5>
                <div class="footer-newsletter">
                    <form id="invite1" method="POST">
                        <i class="fa fa-envelope"></i>
                        <input type="email" placeholder="Email address" class="e-mail" name="email" id="address1" data-validate="validate(required, email)">
                        <button type="button" onclick="subscribeFunction()"><?/*= Yii::t('app', 'Subscribe')*/?></button>
                    </form>
                    <span><?/*= Yii::t('app', 'Subscribe to our email newsletter:')*/?></span>
                    <div id="result1"></div>
                </div>-->
                <div class="footer-social">

                    <h3 class="heading-1"><span><?= Yii::t('app', 'We are in social networks')?></span></h3>
                    <div class="container">
                        <div class="row">
                            <div class="social-buttons">
                                <a style="color: #fff" class="btn btn-block btn-social btn-facebook">
                                    <i class="fa fa-facebook"></i> Facebook
                                </a>
                                <a style="color: #fff" class="btn btn-block btn-social btn-google-plus">
                                    <i class="fa fa-google-plus"></i> Google
                                </a>
                                <a style="color: #fff" class="btn btn-block btn-social btn-instagram">
                                    <i class="fa fa-instagram"></i> Instagram
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER COPYRIGHT -->
        <div class="footer-bottom">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <p>&copy; Copyright 2018 Все права защищены.
                    Разработано в: Perfect Premium Service. <br>Tel. <a style="color: #666" href="callto:+998998580563">+998998580563</a> E-mail: <a style="color: #666" href="mailto:ukamal@yandex.ru">ukamal@yandex.ru</a></p>
                </div>
                <div class="col-md-8 col-sm-12">
                    <ul class="footer-links">
                        <li><a href="<?= Url::to('site/about')?>">О нас</a></li>
                        <li><a href="<?= Url::to('site/contact')?>">Связаться с нами</a></li>
                        <li><a href="<?= Url::to('site/rek')?>">Реклама</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>