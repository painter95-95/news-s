<?php
namespace backend\controllers;

use common\models\Article;
use common\models\Facts;
use common\models\Feedback;
use common\models\Gallery;
use common\models\News;
use common\models\Tours;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\ForbiddenHttpException;


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
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'logout'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index', 'feedback', 'viewfeedback'],
                        'allow' => true,
                        'roles' => ['admin'],
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
    public function beforeAction($action)
    {
        if ($action->id == 'error')
            $this->layout = 'loginLayout.php';

        return parent::beforeAction($action);
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
		$model = new News();
        $facts = $model->find()->where(['type_cat' => 3])->count('id');
        $article = $model->find()->where(['type_cat' => 2])->count('id');
        $news = $model->find()->where(['type_cat' => 1])->count('id');
        return $this->render('index',
            [
                'news'=>$news,
                'article'=>$article,
                'facts'=>$facts,
            ]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionViewfeedback()
    {
        return $this->render('viewfeedback');
    }

   

    public function actionFeedback()
    {
        $feedback = Feedback::find()->all();
        return $this->render('feedback',[
            'feedback' => $feedback
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {

        $this->layout ="loginLayout";
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

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
