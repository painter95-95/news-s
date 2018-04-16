<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content_blog">
<div class="wrapper">
    <div class="row">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'method'=>'post','role'=>'form', 'id'=>'form-signup']]); ?>
            <input name="_csrf-frontend" value="WFVoNm1jR0QUEAoHGjBzKWo9MldZBTcvHD5ZXyBQPhMMLzF5XjkBdw==" type="hidden">
            <div class="col-md-4"> </div>
            <div class="col-md-8">
                <div class="contact_heading">
                    <h2>Saytdan ro'yxatdan o'tish</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact_des">


                            <div class="inputs_des">
                                <span><i class="fa fa-user"></i>  Login</span>
                                <div class="form-group field-signupform-username required">

                                    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'id'=>'signupform-username', 'class'=>'form-control', ])->label(false) ?>

                                    <p class="help-block help-block-error"></p>
                                </div>
                            </div>

                            <div class="inputs_des">
                                <span><i class="fa fa-envelope-o"></i>  E-mail</span>
                                <div class="form-group field-signupform-email required">
                                    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'id'=>'signupform-email', 'class'=>'form-control', ])->label(false) ?>
                                    <p class="help-block help-block-error"></p>
                                </div>
                            </div>

                            <div class="inputs_des">
                                <span><i class="fa fa-unlock-alt"></i>  Parol</span>
                                <div class="form-group field-signupform-password required">

                                    <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control', 'id'=>'signupform-password'])->label(false) ?>

                                    <p class="help-block help-block-error"></p>
                                </div>
                            </div>
                            <div class="inputs_des">
                                <span><i class="fa fa-unlock-alt"></i>  Parolni qayta kiriting</span>
                                <div class="form-group field-signupform-password_repeat">


                                    <?= $form->field($model, 'password_repeat')->passwordInput(['class'=>'form-control', 'id'=>'signupform-password'])->label(false) ?>

                                    <p class="help-block help-block-error"></p>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="signup-button">Jo'natish</button> </div>
                    </div>


                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
</div>
</div>