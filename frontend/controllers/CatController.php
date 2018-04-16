<?php

namespace app\controllers;

use common\models\Article;
use common\models\Follow;
use common\models\News;
use common\models\NewsSearch;
use common\models\Reklama;
use Yii;
use common\models\Cat;
use common\models\CatSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CatController implements the CRUD actions for Cat model.
 */
class CatController extends Controller
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

    public function actionIndex()
    {
        $news = News::find()->limit('3')->all();
        return $this->render('index', [
            'news' => $news,
        ]);
    }

    public function actionView($token)
    {
        $news = Cat::find()->where(['token'=>$token])->one();
        return $this->render('view', [
            'news' => $news,
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Cat::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
