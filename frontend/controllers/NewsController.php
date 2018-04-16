<?php

namespace app\controllers;
use Yii;
use common\models\News;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsController implements the CRUD actions for News model.
 * Category News (table type_cat)
 * Articles = 2;
 * News = 1;
 * Facts = 3;
 */
class NewsController extends Controller
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

    public function actionIndex($id)
    {
        $news = News::find()->where(['type_cat'=>$id])->orderBy(['create_at' => SORT_DESC]);
        $countNews = clone $news;
        $pages = new Pagination(['totalCount'=>$countNews->count(), 'pageSize'=> 7]);
        $models = $news->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('models', 'pages'));
    }

    public function actionSearch(){
        $q = Yii::$app->request->get('q');
        $news = News::find()->where(['like', 'title_'.Yii::$app->language, $q]);
        $countNews = clone $news;
        $pages = new Pagination(['totalCount'=>$countNews->count(), 'pageSize'=> 9]);
        $models = $news->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('models', 'pages', 'q'));
    }


    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
