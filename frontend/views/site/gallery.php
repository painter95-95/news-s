<?php

use \yii\helpers\Url;
?>

<!-- // CATEGORIES -->
<div class="container padding-bottom-50" style="background: #fff;padding: 10px">
    <div class="container">
        <div class="row">
            <br>
            <h3>Gallery</h3>
            <br>
            <? foreach ($photos as $photo):?>
            <div class="col-md-3 col-sm-3 margin-bottom-30">
                <div class="product-cat">
                    <a href="<?= Url::toRoute(['news/view', 'id' => $photo->id])?>">
                        <div class="overlay-alt"></div>
                        <img src="<?= Url::to('@web/images/news/slide/'.$photo->logo)?>" class="img-responsive" alt=""/>
                        <h2 style="background: #fff; color: #2e3436; opacity: 0.4;"><span><?=$photo->title_en?></span></h2>
                    </a>
                </div>
            </div>
            <? endforeach; ?>

        </div>

        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="product-cat margin-bottom-30">
                    <a href="shop-full.html" tppabs="http://ckthemes.com/html/watcher/shop-full.html">
                        <div class="overlay-alt"></div>
                        <img src="images/shop/cat/4.jpg" tppabs="http://ckthemes.com/html/watcher/images/shop/cat/4.jpg" class="img-responsive" alt=""/>
                        <h2>Summer Shoe Collection<span>View Collection</span></h2>
                    </a>
                </div>
                <div class="product-cat margin-bottom-30">
                    <a href="shop-full.html" tppabs="http://ckthemes.com/html/watcher/shop-full.html">
                        <div class="overlay-alt"></div>
                        <img src="images/shop/cat/5.jpg" tppabs="http://ckthemes.com/html/watcher/images/shop/cat/5.jpg" class="img-responsive" alt=""/>
                        <h2>Women's Collection<span>View Collection</span></h2>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="product-cat margin-bottom-30">
                    <a href="shop-full.html" tppabs="http://ckthemes.com/html/watcher/shop-full.html">
                        <div class="overlay-alt"></div>
                        <img src="images/shop/cat/6.jpg" tppabs="http://ckthemes.com/html/watcher/images/shop/cat/6.jpg" class="img-responsive" alt=""/>
                        <h2>Autumn Collection<span>View Collection</span></h2>
                    </a>
                </div>
                <div class="product-cat margin-bottom-30">
                    <a href="shop-full.html" tppabs="http://ckthemes.com/html/watcher/shop-full.html">
                        <div class="overlay-alt"></div>
                        <img src="images/shop/cat/7.jpg" tppabs="http://ckthemes.com/html/watcher/images/shop/cat/7.jpg" class="img-responsive" alt=""/>
                        <h2>Jewelry</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // CATEGORIES -->