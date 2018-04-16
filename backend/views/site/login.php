<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper">
    <!--\\\\\\\ wrapper Start \\\\\\-->





    <div class="login_page">
        <div class="login_content">
            <div class="panel-heading border login_heading">sign in now</div>
            <?php $form = ActiveForm::begin(['options' => ['class'=>'form-horizontal']]); ?>

                <div class="form-group">

                    <div class="col-sm-10">
                        <?= $form->field($model, 'username')->textInput(['class' => 'form-control', 'placeholder' => 'username'])->label(false) ?>
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-10">
                        <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control', 'placeholder' => 'Password'])->label(false) ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-sm-10">
                        <div class="checkbox checkbox_margin">
                            <label class="lable_margin">
                                <?= $form->field($model, 'rememberMe')->checkbox() ?><p class="pull-left"> Remember me</p></label>

                                <button class="btn btn-default pull-right" type="submit">Sign in</button>
                            </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>

        </div>
    </div>








</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
            </div>
            <div class="modal-body"> content </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
            </div>
            <div class="modal-body"> sgxdfgxfg </div>
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
