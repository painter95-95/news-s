<?php

namespace app\controllers;

use common\models\Article;
use common\models\Follow;
use common\models\News;
use Yii;
use common\models\Pages;
use common\models\PagesSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PagesController implements the CRUD actions for Pages model.
 */
class PagesController extends Controller
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
     * Lists all Pages models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PagesSearch();
        $news = News::find()->limit('5')->orderBy(['create_at' => DESC])->all();
        $articles = Article::find()->limit('5')->orderBy(['create_at' => DESC])->all();
        $follow = Follow::find()->where(['type'=>1])->limit('7')->all();
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find(),
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

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $news = News::find()->limit('5')->orderBy(['create_at' => DESC])->all();
        $articles = Article::find()->limit('5')->orderBy(['create_at' => DESC])->all();
        $follow = Follow::find()->where(['type'=>1])->limit('7')->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'news' => $news,
            'articles' => $articles,
            'follow' => $follow
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Pages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
