<?php

use yii\widgets\ListView;
use yii\helpers\Url;
$this->title = Yii::t('app', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- PAGE HEADER -->
<div class="page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-9">
                <ul class="bcrumbs">
                    <li><a href="<?= Url::to('@web/')?>"><?= Yii::t('app', 'Home');?></a></li>
                    <li><?= Yii::t('app', 'News');?></li>
                </ul>
                <br>
                <h2><?= Yii::t('app', 'News');?></h2>
            </div>
        </div>
    </div>
</div>
<!-- // PAGE HEADER -->
<?= $q?>


<? foreach ($models as $product):?>

    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="<?= Url::to('@web/')?>images/home/product1.jpg" alt="" />
                    <h2>$56</h2>
                    <p>Easy Polo Black Edition</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                    <a href="<?= Url::toRoute(['news/view', 'id' => $news->id])?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Подробнее</a>
                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
            </div>
        </div>
    </div>
<? endforeach;?>
<ul class="pagination">
    <?= \yii\widgets\LinkPager::widget(['pagination'=>$pages])?>
</ul>