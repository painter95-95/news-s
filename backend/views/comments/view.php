<?php

use yii\helpers\Url;

$this->title = $model->name;
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
        <div class="col-sm-8">
            <div class="ticket_open">
                <div class="ticket_open_heading">
                    <h3 class="pull-left"><span class="semi-bold">Ticket #222a</span></h3>
                </div>
                <div class="clearfix"></div>
                <div class="open_ticket">
                    <div class="open_ticket_rating pull-left">Current Rating on this Ticket
                        <div class="rating">
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-heart ratingcolor"></i>
                            <i class="fa fa-heart ratingcolor"></i> <span>3(pretty good)</span>
                        </div>
                    </div>

                    <div class="open_ticket_rating pull-right">Average Respones Speed
                        <div class="rating">
                            <i class="fa fa-clock-o rating_i"></i>
                            <span>36.9 Minutes</span>
                        </div>
                    </div>

                </div>
                <a href="#" class="open_ticket_comment">
                    <div class="open_ticket_thumnail">
                        <div class="btn-group">
                            <i class="fa fa-user"></i>
                        </div>
                        Conner Turnbull
                    </div>
                    <div class="ticket_problem">"A Big Problem"</div>
                    <span>Note really:)</span>
                    <p>-Post 1 hour ago</p>
                </a>

                <a href="#" class="open_ticket_comment  active_ticket">
                    <div class="open_ticket_thumnail">
                        <div class="btn-group">
                            <i class="fa fa-user"></i>
                        </div>
                        Conner Turnbull
                    </div>
                    <span>That's grate - I don't need to do anything?</span>
                    <p>-Post 34 minutes ago</p>
                </a>


                <a href="#" class="open_ticket_comment">
                    <div class="open_ticket_thumnail">
                        <div class="btn-group">
                            <i class="fa fa-user"></i>
                        </div>
                        Conner Turnbull
                    </div>
                    <span>Nope!</span>
                    <p>-Post 42 minutes ago</p>
                </a>


                <a href="#" class="open_ticket_comment">
                    <div class="open_ticket_thumnail">
                        <div class="btn-group">
                            <i class="fa fa-user"></i>
                        </div>
                        Conner Turnbull
                    </div>
                    <span>Nope!</span>
                    <p>-Post 38 minutes ago</p>
                </a>





                <div class="input-group">
                    <textarea name="" cols="" rows="" class="form_ticket_question2" placeholder="add comment"></textarea>
                </div>
                <br>
                <div class="btn-group"> <a class="btn btn-sm ticket_btn" href="javascript:void(0)">Private</a> </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</div>