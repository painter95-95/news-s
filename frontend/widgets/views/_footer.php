<?
use yii\helpers\Url;
?>
<footer class="bg-dark footer1 padding-top-60">
    <div class="container">
        <div class="row margin-bottom-30">
            <div class="col-md-4 col-sm-4 margin-bottom-30 footer-info">
                <a style="background-color: #ffffff;" href="<?= Url::to('@web/');?>"><img src="<?=Url::to('@web/images/m-logo.png')?>" class="img-responsive" alt=""/></a>
                <p>Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.</p>
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
                <h5><?= Yii::t('app', 'Follow Us')?></h5>
                <div class="footer-newsletter">
                    <form id="invite1" method="POST">
                        <i class="fa fa-envelope"></i>
                        <input type="email" placeholder="Email address" class="e-mail" name="email" id="address1" data-validate="validate(required, email)">
                        <button type="button" onclick="subscribeFunction()"><?= Yii::t('app', 'Subscribe')?></button>
                    </form>
                    <span><?= Yii::t('app', 'Subscribe to our email newsletter:')?></span>
                    <div id="result1"></div>
                </div>
                <div class="footer-social">

                    <h3 class="heading-1"><span><?= Yii::t('app', 'We are in social networks')?></span></h3>
                    <div class="side-share wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <? $socials = \common\models\Follow::find()->limit('6')->all();
                        foreach ($socials as $social):
                            ?>
                            <div class="share wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <i class="<?= $social->icon;?>"></i>
                                <div class="counter c_facebook wow fadeIn" style="visibility: visible; animation-name: fadeIn;">0</div>
                                <span>like</span>
                            </div>
                        <? endforeach; ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER COPYRIGHT -->
        <div class="footer-bottom">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <p>&copy; Copyright 2018 Все права защищены.
                    Разработано в: Perfect Premium Service. Tel. +998937077371 E-mail: achilov21@yandex.com</p>
                </div>
                <div class="col-md-8 col-sm-12">
                    <ul class="footer-links">
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Связаться с нами</a></li>
                        <li><a href="#">Условия использования</a></li>
                        <li><a href="#">Политика конфиденциальности</a></li>
                        <li><a href="#">Реклама</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>