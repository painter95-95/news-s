<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ListView;
$this->title = Yii::t('app', 'Articles');
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- PAGE HEADER -->
<div class="page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-9">
                <ul class="bcrumbs">
                    <li><a href="#">Home</a></li>
                    <li>Lifestyle</li>
                </ul>
                <br>
                <h2>LifeStyle</h2>
            </div>
            <div class="col-md-5 col-sm-3">
                <div class="dropdown pull-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Recent
                        <span class="fa fa-angle-down"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Tech</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Travel</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // PAGE HEADER -->

<!-- CATEGORY -->
<div class="container padding-bottom-30">
    <div class="row">
        <div class="col-md-8 col-sm-7 dual-posts padding-bottom-30">

            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView'=>'_indexlist',
                'pager' => [
                    'firstPageLabel' => '<i class="fa fa-angle-double-left"></i>',
                    'lastPageLabel' => '<i class="fa fa-angle-double-right"></i>',
                    'prevPageLabel' => '<i class="fa fa-chevron-left"></i>',
                    'nextPageLabel' => '<i class="fa fa-chevron-right"></i>',
                    'maxButtonCount' => 6,
                ],
            ]);
            ?>
        </div>
        <!-- // CATEGORY -->

        <!-- SIDEBAR -->
        <?= $this->render('_sidebar', ['news' => $news, 'articles' => $articles, 'follow' => $follow]); ?>
        <!-- // SIDEBAR -->

    </div>
</div>
<!-- // CONTENT -->
