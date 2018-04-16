<?php

/* @var $this yii\web\View */

$this->title = 'Admin Panel UzKorea.com.uz';
?>

<div class="contentpanel">
    <!--\\\\\\\ contentpanel start\\\\\\-->
    <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
            <h1>Управление</h1>
            <h2 class="">Subtitle goes here...</h2>
        </div>
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="active">Статистика сайта</li>
            </ol>
        </div>
    </div>
    <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        <div class="row">
            <div class="col-sm-3 col-sm-6">
                <div class="information green_info">
                    <div class="information_inner">
                        <div class="info green_symbols"><i class="fa fa-users icon"></i></div>
                        <span>Записи </span>
                        <h1 class="bolded">12,254K</h1>
                        <div class="infoprogress_green">
                            <div class="greenprogress"></div>
                        </div>
                        <b class=""><small>Better than yesterday ( 7,5% )</small></b>
                        <div class="pull-right" id="work-progress1">
                            <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-sm-6">
                <div class="information blue_info">
                    <div class="information_inner">
                        <div class="info blue_symbols"><i class="fa fa-shopping-cart icon"></i></div>
                        <span>Обратная связь</span>
                        <h1 class="bolded">12,254K</h1>
                        <div class="infoprogress_blue">
                            <div class="blueprogress"></div>
                        </div>
                        <b class=""><small>Better than yesterday ( 7,5% )</small></b>
                        <div class="pull-right" id="work-progress2">
                            <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-sm-6">
                <div class="information red_info">
                    <div class="information_inner">
                        <div class="info red_symbols"><i class="fa fa-comments icon"></i></div>
                        <span>Комментария</span>
                        <h1 class="bolded">12,254K</h1>
                        <div class="infoprogress_red">
                            <div class="redprogress"></div>
                        </div>
                        <b class=""><small>Better than yesterday ( 7,5% )</small></b>
                        <div class="pull-right" id="work-progress3">
                            <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-sm-6">
                <div class="information gray_info">
                    <div class="information_inner">
                        <div class="info gray_symbols"><i class="fa fa-money icon"></i></div>
                        <span>Сегодня посмотрено </span>
                        <h1 class="bolded">12,254K</h1>
                        <div class="infoprogress_gray">
                            <div class="grayprogress"></div>
                        </div>
                        <b class=""><small>Better than yesterday ( 7,5% )</small></b>
                        <div class="pull-right" id="work-progress4">
                            <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="block-web">
                    <div class="header">
                        <h3 class="content-header">Обшая статистика</h3>
                    </div>
                    <div class="porlets-content">
                        <div id="graph"></div>
                    </div>
                    <!--/porlets-content-->
                </div>
                <!--/block-web-->
            </div>
            <!--/col-md-12-->
        </div>
        <!--/row-->

    </div>
    <!--\\\\\\\ container  end \\\\\\-->
</div>