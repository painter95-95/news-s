<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Uzkorea.com | Комментарии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contentpanel">
    <!--\\\\\\\ contentpanel start\\\\\\-->
    <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
            <h1>Комментарии</h1>
            <h2 class="">Subtitle goes here...</h2>
        </div>
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li><a href="<?= Url::toRoute(['comments/index'])?>">Комментарии</a></li>
                <li class="active">Новости</li>
            </ol>
        </div>
    </div>
    <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        <div class="row">
            <div class="col-md-4">
                <div class="ticket_form">
                    <h3><span class="semi-bold">Sumbit New Ticket</span></h3>
                    <h4><span class="semi-bold">Private Ticket</span></h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    <div class="form_ticket dropdown">
                        <a href="#">
                            <div class="input-group pull-left">
                                <input class="form-control" placeholder="This ticket is for..." type="text">
                            </div>

                        </a>
                    </div>

                    <div class="ticket_option">
                        <div class="form_ticket_subject"> <span class="semi-bold">Subject</span>
                            <div class="">
                                <div class="input-group">
                                    <input class="form-control" placeholder="" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form_ticket_subject"> <span class="semi-bold">URL(Optional)</span>
                            <div class="">
                                <div class="input-group">
                                    <input class="form-control" placeholder="http://" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket_option"><span class="semi-bold">Your Question/Pri</span>
                        <div class="input-group">
                            <textarea name="" cols="" rows="" class="form_ticket_question"></textarea>
                        </div>
                    </div>
                    <div class="btn-group"> <a href="javascript:void(0)" class="btn btn-sm ticket_btn">Private</a> </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="ticket_open">
                    <div class="ticket_open_heading">
                        <h3 class="pull-left"><span class="semi-bold">Open Ticket</span></h3>
                        <div class="ticket_open_search">
                            <div class="btn-group"><i class="fa fa-search"></i></div>
                            <div class="input-group pull-left">
                                <input placeholder="Search Resulets..." class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="ticket_open_grid"><b class="pull-right">Responded 25</b> <span class="ticket_open_grid_progress">Responded</span> </div>
                    <?= \yii\widgets\ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView'=>'_table',
                    ]);
                    ?>                    <div style="margin: 0;" role="toolbar" class="btn-toolbar">
                        <div class="btn-group">
                            <button class="btn btn-default" type="button">1</button>
                            <button class="btn btn-default" type="button">2</button>
                            <button class="btn btn-default" type="button">3</button>
                            <button class="btn btn-default" type="button">4</button>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-default" type="button">5</button>
                            <button class="btn btn-default" type="button">6</button>
                            <button class="btn btn-default" type="button">7</button>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-default" type="button">8</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--\\\\\\\ container  end \\\\\\-->
</div>
