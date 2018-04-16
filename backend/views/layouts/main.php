<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="atm-spmenu-push dark_theme green_thm">
<?php $this->beginBody() ?>
<div class="wrapper">
    <!--\\\\\\\ wrapper Start \\\\\\-->
    <div class="header_bar">
        <!--\\\\\\\ header Start \\\\\\-->
        <div class="brand">
            <!--\\\\\\\ brand Start \\\\\\-->
            <div class="logo" style="display:block">Sport</div>
            <div class="small_logo" style="display:none"><img src="<?= Url::to('@web/');?>images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
        </div>
        <!--\\\\\\\ brand end \\\\\\-->
        <div class="header_top_bar">
            <!--\\\\\\\ header top bar start \\\\\\-->
            <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
            <div class="top_left">
                <div class="top_left_menu">
                    <ul>
                        <li> <a href="javascript:void(0);"><i class="fa fa-repeat"></i></a> </li>
                        <li class="dropdown"> <a data-toggle="dropdown" href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a>
                            <ul class="drop_down_task dropdown-menu" style="margin-top:39px">
                                <div class="top_left_pointer"></div>
                                <li><div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember">
                                            Запомни меня </label>
                                    </div></li>
                                <li> <a href="#"><i class="fa fa-question-circle"></i> Помощь</a> </li>
                                <li> <a href="#"><i class="fa fa-cog"></i> Настройка </a></li>
                                <li><a>
                                    <? echo
                                        ''.Html::beginForm(['/site/logout'], 'post')
                                        .Html::beginTag('button',['type'=>'submit', 'value' =>Yii::$app->user->identity->username, 'class'=>'btn btn-danger btn-sm', 'data-confirm'=>'Ishonchigiz komilmi'])
                                        .Html::beginTag('i',['class'=>'fa fa-power-off'])
                                        .Html::endTag('i')
                                        .Html::endTag('button')
                                        .Html::endForm().''; ?>
                                </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> Новое задача</span> </a>
            <div class="top_right_bar">
                <div class="top_right">
                    <div class="top_right_menu">
                        <ul>
                            <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Добавить новые<span class="badge badge">+</span> </a>
                                <ul class="drop_down_task dropdown-menu">
                                    <div class="top_pointer"></div>
                                    <li>
                                        <p class="number">Добавить</p>
                                    </li>
                                    <li> <a href="<?= Url::toRoute(['news/create']); ?>" class="task">
                                            <div class="blue_status task_height" style="width:85%;"></div>
                                            <div class="task_head"> <span class="pull-left"><i class="fa fa-plus-circle"></i> Добавить новости</span></div>
                                        </a> </li>
                                    <li>

                                    <li> <a href="<?= Url::toRoute(['videos/create']); ?>" class="task">
                                            <div class="blue_status task_height" style="width:85%;"></div>
                                            <div class="task_head"> <span class="pull-left"><i class="fa fa-plus-circle"></i> Добавить видео</span></div>
                                        </a> </li>
                                    <li>
                                    <li> <a href="<?= Url::toRoute(['photos/create']); ?>" class="task">
                                            <div class="blue_status task_height" style="width:85%;"></div>
                                            <div class="task_head"> <span class="pull-left"><i class="fa fa-plus-circle"></i> Добавить Фото</span></div>
                                        </a> </li>
                                    <li>
                                    <li> <a href="<?= Url::toRoute(['reklama/create']); ?>" class="task">
                                            <div class="blue_status task_height" style="width:85%;"></div>
                                            <div class="task_head"> <span class="pull-left"><i class="fa fa-plus-circle"></i> Добавить реклама</span></div>
                                        </a> </li>
                                    <li>
                                        <span class="new"> <a href="#" class="pull_left">Создавать новое</a> <a href="task.html" class="pull-right">View All</a> </span> </li>
                                </ul>
                            </li>
                            <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Языки <i style="color: #ffffff;" class="fa fa-angle-down"></i> </a>
                                <ul class="drop_down_task dropdown-menu">
                                    <div class="top_pointer"></div>
                                    <li>
                                        <p class="number">You have 4 mails</p>
                                    </li>
                                    <li class="language" id="ru"> <a href="#ru" class="mail"> <span class="photo"><img src="images/ru.png" /></span> <span class="subject"> <span class="from">Русский</span> </span> </a> </li>
                                    <li class="language" id="uc"> <a href="#uz" class="mail"> <span class="photo"><img src="images/uz.png" /></span> <span class="subject"> <span class="from">Ўзбекча кирилча</span></a> </li>
                                    <li class="language" id="uz"> <a href="#uc" class="mail"> <span class="photo"><img src="images/uc.png" /></span> <span class="subject"> <span class="from">O'zbekcha lotincha</span></a> </li>
                                    <li class="language" id="en"> <a href="#en" class="mail red_color"> <span class="photo"><img src="images/en.png" /></span> <span class="subject"> <span class="from">English</span></a> </li>
                                    <li class="language" id="kor"> <a href="#kor" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">Korean</span> </span></a> </li>

                                </ul>
                            </li>
                            <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Уведомление <span class="badge badge color_2">6</span> </a>
                                <div class="notification_drop_down dropdown-menu">
                                    <div class="top_pointer"></div>
                                    <div class="box"> <a href="inbox.html"> <span class="block primery_6"> <i class="fa fa-envelope-o"></i> </span> <span class="block_text">Mailbox</span> </a> </div>
                                    <div class="box"> <a href="calendar.html"> <span class="block primery_2"> <i class="fa fa-calendar-o"></i> </span> <span class="block_text">Calendar</span> </a> </div>
                                    <div class="box"> <a href="maps.html"> <span class="block primery_4"> <i class="fa fa-map-marker"></i> </span> <span class="block_text">Map</span> </a> </div>
                                    <div class="box"> <a href="todo.html"> <span class="block primery_3"> <i class="fa fa-plane"></i> </span> <span class="block_text">To-Do</span> </a> </div>
                                    <div class="box"> <a href="task.html"> <span class="block primery_5"> <i class="fa fa-picture-o"></i> </span> <span class="block_text">Tasks</span> </a> </div>
                                    <div class="box"> <a href="timeline.html"> <span class="block primery_1"> <i class="fa fa-clock-o"></i> </span> <span class="block_text">Timeline</span> </a> </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="<?= Url::to('@web/')?>images/user.png" /><span class="user_adminname"><? if (!Yii::$app->user->isGuest){ echo Yii::$app->user->identity->username; } ?></span> <b class="caret"></b> </a>
                    <ul class="dropdown-menu">
                        <div class="top_pointer"></div>
                        <li> <a href="profile.html"><i class="fa fa-user"></i> Profile</a> </li>
                        <li> <a href="help.html"><i class="fa fa-question-circle"></i> Help</a> </li>
                        <li> <a href="settings.html"><i class="fa fa-cog"></i> Setting </a></li>
                        <li> <a data-confirm = "Ishonchigiz komilmi">
                                <? echo
                                    ''.Html::beginForm(['/site/logout'], 'post')
                                    .Html::beginTag('button',['type'=>'submit', 'data-confirm'=>'Ishonchigiz komilmi'])
                                    .Html::beginTag('i',['class'=>'fa fa-power-off'])
                                    .Html::endTag('i')
                                     .Html::encode('Logout')
                                    .Html::endTag('button')
                                    .Html::endForm().''; ?>
                            </a> </li>
                    </ul>
                </div>

                <a href="javascript:;" class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch"><i class="fa fa-comment chat"></i></a>

            </div>
        </div>
        <!--\\\\\\\ header top bar end \\\\\\-->
    </div>
    <!--\\\\\\\ header end \\\\\\-->
    <div class="inner">
        <!--\\\\\\\ inner start \\\\\\--><div class="left_nav">

            <!--\\\\\\\left_nav start \\\\\\-->
            <div class="search_bar"> <i class="fa fa-search"></i>
                <input name="" type="text" class="search" placeholder="Search Dashboard..." />
            </div>
            <div class="left_nav_slidebar">
                <ul>
                    <li> <a href="/admin"> <i class="fa fa-home"></i> Главная</a>
                    </li>
                    <li> <a href="javascript:void(0);"> <i class="fa fa-th-list"></i> Категории <span class="plus"><i class="fa fa-plus"></i></span></a>
                        <ul>
                            <li> <a href="<?= Url::toRoute(['cat/index'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Список</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['cat/create'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Добавить</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['cat/active'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Активировать</b> </a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);"> <i class="fa fa-rss"></i> Новости <span class="plus"><i class="fa fa-plus"></i></span></a>
                        <ul>
                            <li> <a href="<?= Url::toRoute(['news/index'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Список новости</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['news/create'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Добавить новости</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['news/active'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Активировать</b> </a> </li>
                        </ul>
                    </li>

                    <li> <a href="javascript:void(0);"> <i class="fa fa-pagelines"></i> Страници<span class="plus"><i class="fa fa-plus"></i></span></a>
                        <ul>
                            <li> <a href="<?= Url::toRoute(['pages/index'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Список</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['pages/create'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Добавить</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['pages/active'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Активировать</b> </a> </li>
                        </ul>
                    </li>

                    <li> <a href="javascript:void(0);"> <i class="fa fa-comments-o"></i> Комментарии<span class="plus"><i class="fa fa-plus"></i></span></a>
                        <ul>
                            <li> <a href="<?= Url::toRoute(['comments/index'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Список</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['comments/create'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Оставить коммент</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['comments/active'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Активировать</b> </a> </li>
                        </ul>
                    </li>

                    <li> <a href="javascript:void(0);"> <i class="fa fa-users"></i> Подписшики<span class="plus"><i class="fa fa-plus"></i></span></a>
                        <ul>
                            <li> <a href="<?= Url::toRoute(['subscribe/index'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Список подписшики</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['subscribe/create'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Отправить сообщение</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['subscribe/active'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Активировать</b> </a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);"> <i class="fa fa-facebook"></i> Социалный сети<span class="plus"><i class="fa fa-plus"></i></span></a>
                        <ul>
                            <li> <a href="<?= Url::toRoute(['subscribe/index'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Список</b> </a> </li>
                        </ul>
                    </li>


                    <li> <a href="javascript:void(0);"> <i class="fa fa-list-ul"></i> Меню <span class="plus"><i class="fa fa-plus"></i></span></a>
                        <ul>
                            <li> <a href="<?= Url::toRoute(['menu/index'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Главная меню</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['childmenu/index'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Под меню</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['menu/create'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Добавить главная меню</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['childmenu/create'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Добавить под меню</b> </a> </li>
                        </ul>
                    </li>

                    <li> <a href="javascript:void(0);"> <i class="fa fa-thumb-tack"></i> Реклама <span class="plus"><i class="fa fa-plus"></i></span></a>
                        <ul>
                            <li> <a href="<?= Url::toRoute(['reklama/index'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Список</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['reklama/create'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Добавить</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['reklama/active'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Активировать</b> </a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);"> <i class="fa fa-flag"></i> Языки <span class="plus"><i class="fa fa-plus"></i></span></a>
                        <ul>
                            <li> <a href="<?= Url::toRoute(['message/index'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Переведенные тексты сайта</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['message/create'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Добавить</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['source-message/create'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Добавить</b> </a> </li>
                             </ul>
                    </li>
                    <li> <a href="javascript:void(0);"> <i class="fa fa-film"></i> Галерея <span class="plus"><i class="fa fa-plus"></i></span> </a>
                        <ul>
                            <li> <a href="<?= Url::toRoute(['photos/index'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Фотогалерея</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['videos/index'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Видеогалерея</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['photos/create'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Добавить фото</b> </a> </li>
                            <li> <a href="<?= Url::toRoute(['videos/create'])?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Добавить видео</b> </a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--\\\\\\\left_nav end \\\\\\-->
        <?= Alert::widget() ?>
        <?= $content ?>
        <!--\\\\\\\ content panel end \\\\\\-->
    </div>
    <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Новое задача</h4>
            </div>
            <div class="modal-body"> content </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- sidebar chats -->
<nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
    <div class="header">
        <input type="text" class="form-control chat-search" placeholder=" Search">
    </div>
    <div href="#" class="sub-header">
        <div class="icon"><i class="fa fa-user"></i></div> <p>Online (4)</p>
    </div>
    <div class="content">
        <p class="title">Family</p>
        <ul class="nav nav-pills nav-stacked contacts">
            <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
            <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
            <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
            <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
        </ul>

        <p class="title">Friends</p>
        <ul class="nav nav-pills nav-stacked contacts">
            <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
            <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
        </ul>

        <p class="title">Work</p>
        <ul class="nav nav-pills nav-stacked contacts">
            <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
        </ul>

    </div>
    <div id="chat-box">
        <div class="header">
            <span>Richard Avedon</span>
            <a class="close"><i class="fa fa-times"></i></a>    </div>
        <div class="messages nano nscroller has-scrollbar">
            <div class="content" tabindex="0" style="right: -17px;">
                <ul class="conversation">
                    <li class="odd">
                        <p>Hi John, how are you?</p>
                    </li>
                    <li class="text-right">
                        <p>Hello I am also fine</p>
                    </li>
                    <li class="odd">
                        <p>Tell me what about you?</p>
                    </li>
                    <li class="text-right">
                        <p>Sorry, I'm late... see you</p>
                    </li>
                    <li class="odd unread">
                        <p>OK, call me later...</p>
                    </li>
                </ul>
            </div>
            <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
        <div class="chat-input">
            <div class="input-group">
                <input type="text" placeholder="Enter a message..." class="form-control">
        <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Send</button>
        </span>      </div>
        </div>
    </div>
</nav>
<!-- /sidebar chats -->

<!-- sidebar chats -->
<nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
    <div class="header">
        <input type="text" class="form-control chat-search" placeholder=" Search">
    </div>
    <div href="#" class="sub-header">
        <div class="icon"><i class="fa fa-user"></i></div> <p>Online (4)</p>
    </div>
    <div class="content">
        <p class="title">Family</p>
        <ul class="nav nav-pills nav-stacked contacts">
            <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
            <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
            <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
            <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
        </ul>

        <p class="title">Friends</p>
        <ul class="nav nav-pills nav-stacked contacts">
            <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
            <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
        </ul>

        <p class="title">Work</p>
        <ul class="nav nav-pills nav-stacked contacts">
            <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
        </ul>

    </div>
    <div id="chat-box">
        <div class="header">
            <span>Richard Avedon</span>
            <a class="close"><i class="fa fa-times"></i></a>    </div>
        <div class="messages nano nscroller has-scrollbar">
            <div class="content" tabindex="0" style="right: -17px;">
                <ul class="conversation">
                    <li class="odd">
                        <p>Hi John, how are you?</p>
                    </li>
                    <li class="text-right">
                        <p>Hello I am also fine</p>
                    </li>
                    <li class="odd">
                        <p>Tell me what about you?</p>
                    </li>
                    <li class="text-right">
                        <p>Sorry, I'm late... see you</p>
                    </li>
                    <li class="odd unread">
                        <p>OK, call me later...</p>
                    </li>
                </ul>
            </div>
            <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
        <div class="chat-input">
            <div class="input-group">
                <input type="text" placeholder="Enter a message..." class="form-control">
        <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Send</button>
        </span>      </div>
        </div>
    </div>
</nav>
<!-- /sidebar chats -->



<div class="demo"><span id="demo-setting"><i class="fa fa-cog txt-color-blueDark"></i></span> <form><legend class="no-padding margin-bottom-10" style="color:#6e778c;">Layout Options</legend><section><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-header" name="subscription"><span>Fixed Header</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-navigation" name="terms"><span>Fixed Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-rigth-navigation" name="terms"><span>Right Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-boxed-layout" name="terms"><span>Boxed Layout</span></label><span id="smart-bgimages" style="display: none;"></span></section><section><h6 class="margin-top-10 semi-bold margin-bottom-5">Clear Localstorage</h6><a id="reset-smart-widget" class="btn btn-xs btn-block btn-primary" href="javascript:void(0);"><i class="fa fa-refresh"></i> Factory Reset</a></section> <h6 class="margin-top-10 semi-bold margin-bottom-5">mypharmacy.uz</h6><section id="smart-styles"><a style="background-color:#23262F;" class="btn btn-block btn-xs txt-color-white margin-right-5" id="dark_theme" href="javascript:void(0);"><i id="skin-checked" class="fa fa-check fa-fw"></i> Dark Theme</a><a style="background:#E35154;" class="btn btn-block btn-xs txt-color-white" id="red_thm" href="javascript:void(0);">Red Theme</a><a style="background:#34B077;" class="btn btn-xs btn-block txt-color-darken margin-top-5" id="green_thm" href="javascript:void(0);">Green Theme</a><a style="background:#56A5DB" class="btn btn-xs btn-block txt-color-white margin-top-5" data-skinlogo="img/logo-pale.png" id="blue_thm" href="javascript:void(0);">Blue Theme</a><a style="background:#9C6BAD" class="btn btn-xs btn-block txt-color-white margin-top-5" id="magento_thm" href="javascript:void(0);">Magento Theme</a><a style="background:#FFFFFF" class="btn btn-xs btn-block txt-color-black margin-top-5" id="magento_thm" href="javascript:void(0);">Light Theme</a></section></form> </div>

<? $this->registerJsFile(Yii::getAlias('@web/plugins/ckeditor/ckeditor.js')); ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
