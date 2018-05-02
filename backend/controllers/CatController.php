<?php

namespace backend\controllers;

use common\models\Article;
use common\models\Facts;
use common\models\News;
use common\models\Photos;
use common\models\Videos;
use Yii;
use common\models\Cat;
use common\models\CatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\imagine\Image;
use Imagine\Image\Box;
use yii\web\UploadedFile;
Yii::setAlias('newsfolder', dirname(dirname(__DIR__)) . '/frontend/web/images/category/');

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

    /**
     * Lists all Cat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cat model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Cat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cat();
        if ($model->load(Yii::$app->request->post())) {
            $filename = rand(1000000000, 9999999999);
            $num = rand(0, 9999);
            $model->type_post = 12;
            $model->logo = UploadedFile::getInstance($model,'logo');
            if (!empty($model->logo)){
                $model->logo->saveAs( Yii::getAlias('@newsfolder/original/').$filename.'.'.$model->logo->extension );
                $model->logo =  $filename.'.'.$model->logo->extension;
                $imagine = Image::getImagine();
                $image = $imagine->open(Yii::getAlias('@newsfolder/original/'.$model->logo));
                $image->resize(new Box(191, 120))->save(Yii::getAlias('@newsfolder/list/'.$model->logo, ['quality' => 70]));
            }
            if ($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }else {
                Yii::$app->session->setFlash('error', 'Данные не успешно добавлен в базе');
                return $this->render('create', [
                    'model' => $model,
                ]);}
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->logo = UploadedFile::getInstance($model, 'logo');
            if (!empty($model->logo) || isset($model->logo)){
                @unlink(Yii::getAlias('@newsfolder/original/' . $this->findModel($id)->logo));
                @unlink(Yii::getAlias('@newsfolder/list/' . $this->findModel($id)->logo));

                // get the instance of the uploaded file
                $filename = rand(1000000000, 9999999999);

                if (!empty($model->logo)) {
                    $model->logo->saveAs(Yii::getAlias('@newsfolder/original/') . $filename . '.' . $model->logo->extension);
                    $model->logo = $filename . '.' . $model->logo->extension;
                    $imagine = Image::getImagine();
                    $image = $imagine->open(Yii::getAlias('@newsfolder/original/'.$model->logo));
                    $image->resize(new Box(191, 120))->save(Yii::getAlias('@newsfolder/list/'.$model->logo, ['quality' => 70]));
                }
            }else{
                $model->logo = $this->findModel($id)->logo;
            }
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);}
        }else {
            return $this->render('update', [
                'model' => $model,
            ]);}
    }

    /**
     * Deletes an existing Cat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $articles = Article::findAll(['cat_id'=>$this->findModel($id)]);
        if ($articles != null){
            foreach ($articles as $article){
                $article->deleteArt($article->id);
            }
        }
        $news = News::findAll(['cat_id'=>$this->findModel($id)]);
        if ($news != null){
            foreach ($news as $item){
                $item->deleteNews($item->id);
            }
        }
        $facts = Facts::findAll(['cat_id'=>$this->findModel($id)]);
        if ($facts != null){
            foreach ($facts as $fact){
                $fact->deleteFacts($fact->id);
            }
        }
        $photos = Photos::findAll(['cat_id'=>$this->findModel($id)]);
        if ($photos != null){
            foreach ($photos as $photo){
                $photo->deletePhoto($photo->id);
            }
        }
        $videos = Videos::findAll(['cat_id'=>$this->findModel($id)]);
        if ($videos != null){
            foreach ($videos as $video){
                $video->deleteVideo($video->id);
            }
        }
        @unlink(Yii::getAlias('@newsfolder/list/'.$this->findModel($id)->logo));
        @unlink(Yii::getAlias('@newsfolder/orginal/'.$this->findModel($id)->logo));
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Cat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cat::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
