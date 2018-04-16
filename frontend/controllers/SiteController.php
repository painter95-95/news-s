<?php
namespace app\controllers;

use common\models\Cat;
use common\models\Follow;
use common\models\News;
use common\models\Reklama;
use common\models\Videos;
use common\models\ViewPost;
use Yii;
use yii\base\InvalidParamException;
use yii\data\Pagination;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionLanguage($lang)
    {
        if (isset($_GET['lang'])){
            \Yii::$app->language = $_GET['lang'];
            $cookie = new \yii\web\Cookie([
                'name'=>'lang',
                'value'=>$_GET['lang'],
            ]);
            Yii::$app->getResponse()->getCookies()->add($cookie);
        }
    }


    public function actionIndex()
    {

        $reklama = new Reklama();
        $model = new News();
        $cat = Cat::find()->select('id, token, name_'.Yii::$app->language)->limit('16')->all();
        $news = $model->find()->where(['type_cat'=>1])->limit('8')->orderBy(['create_at'=>SORT_DESC])->all();
        $articles = $model->find()->where(['type_cat'=>2])->limit('4')->orderBy(['create_at'=>SORT_DESC])->all();
        $videos = Videos::find()->limit('4')->orderBy(['create_at'=>SORT_DESC])->all();
        $articles_top = $model->find()->where(['type_cat'=>2])->limit('2')->orderBy(['create_at'=>SORT_DESC])->all();
        $follow = Follow::find()->where(['type'=>1])->limit('3')->all();
        $follow2 = Follow::find()->where(['type'=>2])->limit('3')->all();
        $facts = $model->find()->where(['type_cat'=>3])->limit('5')->all();
        return $this->render('index',[
            'cat' => $cat,
            'news' => $news,
            'follow' => $follow,
            'follow2' => $follow2,
            'articles' => $articles,
            'articles_top' => $articles_top,
            'videos' => $videos,
            'facts'=> $facts,
            'reklama' => $reklama
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }


    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionAnketa()
    {
        return $this->render('anketa');
    }

    public function actionGallery()
    {
        $photos = News::find()->select('id, logo, title_en')->all();
        return $this->render('gallery', compact('photos'));
    }


    public function actionNews($id)
    {
        $news = new News();
        $news_id = $news->find()->where(['token'=> $id])->one();
        //view
        $session = Yii::$app->session;
        if ( !$session->isActive) { $session->open(); }
        $session_id = Yii::$app->session->getId();
        $view = ViewPost::find()->where(['post_id' => $news_id->id, 'session' => $session_id])->one();
        if ($view == null){
            $news->viewNews($news_id->id, $session_id, $news_id->cat_id);
        }
        //end view
        return $this->render('view', [
            'model' => $news_id,
        ]);
    }

    public function actionNewsall()
    {
        $news = News::find()->orderBy(['create_at' => SORT_DESC]);
        $countNews = clone $news;
        $pages = new Pagination(['totalCount'=>$countNews->count(), 'pageSize'=> 7]);
        $models = $news->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('newsall', compact('models', 'pages'));
    }
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
