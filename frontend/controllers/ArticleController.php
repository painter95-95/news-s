<?php

namespace app\controllers;

use common\models\Follow;
use common\models\News;
use common\models\ViewPost;
use Yii;
use common\models\Article;
use common\models\ArticleSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Reklama;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
        $news = News::find()->limit('5')->orderBy(['create_at' => DESC])->all();
        $articles = Article::find()->limit('5')->orderBy(['create_at' => DESC])->all();
        $follow = Follow::find()->where(['type'=>1])->limit('7')->all();
        $dataProvider = new ActiveDataProvider([
            'query' => Article::find(),
            'pagination' => [
                'pageSize' => 6,
                //'pageParam' => 'page',
                'validatePage' => false,
            ],
        ]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'news' => $news,
            'articles' => $articles,
            'follow' => $follow
        ]);
    }

    
    public function actionView($id)
    {
		$reklama = new Reklama();
        $news = News::find()->limit('5')->orderBy(['create_at' => DESC])->all();
        $model = new Article();
        //view
        $session = Yii::$app->session;
        if ( !$session->isActive) { $session->open(); }
        $session_id = Yii::$app->session->getId();
        $view = ViewPost::find()->where(['post_id' => $id, 'session' => $session_id])->one();
        if ($view == null){
            $model->viewArticle($id, $session_id, $this->findModel($id)->cat_id);
        }
        //end view
        $articles = $model->find()->limit('5')->orderBy(['create_at' => DESC])->all();
        $follow = Follow::find()->where(['type'=>1])->limit('7')->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'news' => $news,
            'articles' => $articles,
            'follow' => $follow,
			'reklama' => $reklama
        ]);
    }

   
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
