<?php

namespace backend\controllers;

use yii\imagine\Image;
use Imagine\Image\Box;
use Yii;
use common\models\News;
use common\models\NewsSearch;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

Yii::setAlias('newsfolder', dirname(dirname(__DIR__)) . '/frontend/web/images/news/');


/**
 * NewsController implements the CRUD actions for News model.
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

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
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
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();
        if ($model->load(Yii::$app->request->post())) {
            $filename = rand(1000000000, 9999999999);
            $num = rand(0, 9999);
            $model->create_at = date('Y-m-d H:i:s');
            $model->author = Yii::$app->user->identity->id;
            $model->logo = UploadedFile::getInstance($model,'logo');
            if (!empty($model->logo)){
                $model->logo->saveAs( Yii::getAlias('@newsfolder/original/').$filename.'.'.$model->logo->extension );
                $model->logo =  $filename.'.'.$model->logo->extension;
                $imagine = Image::getImagine();
                $image = $imagine->open(Yii::getAlias('@newsfolder/original/'.$model->logo));
                $image->resize(new Box(191, 120))->save(Yii::getAlias('@newsfolder/list/'.$model->logo, ['quality' => 70]));
                $image->resize(new Box(216, 135))->save(Yii::getAlias('@newsfolder/view/'.$model->logo, ['quality' => 70]));
                $image->resize(new Box(413, 209))->save(Yii::getAlias('@newsfolder/slide/'.$model->logo, ['quality' => 70]));
                $image->resize(new Box(710, 289))->save(Yii::getAlias('@newsfolder/single/'.$model->logo, ['quality' => 70]));
                $image->resize(new Box(105, 70))->save(Yii::getAlias('@newsfolder/sidebar/'.$model->logo, ['quality' => 70]));
            }
            if ($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }else {
                Yii::$app->session->setFlash('error', 'Не добавлен!');
                return $this->render('create', [
                    'model' => $model,
                ]);}
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }


    public function actionUpdate($id)
    {

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->update_at = date('Y-m-d H:i:s');
            $model->logo = UploadedFile::getInstance($model, 'logo');
            if (!empty($model->logo) || isset($model->logo)){
                @unlink(Yii::getAlias('@newsfolder/' . $this->findModel($id)->logo));
                @unlink(Yii::getAlias('@newsfolder/original/' . $this->findModel($id)->logo));
                @unlink(Yii::getAlias('@newsfolder/list/' . $this->findModel($id)->logo));
                @unlink(Yii::getAlias('@newsfolder/view/' . $this->findModel($id)->logo));
                @unlink(Yii::getAlias('@newsfolder/slide/' . $this->findModel($id)->logo));
                @unlink(Yii::getAlias('@newsfolder/single/' . $this->findModel($id)->logo));
                @unlink(Yii::getAlias('@newsfolder/sidebar/' . $this->findModel($id)->logo));

            // get the instance of the uploaded file
            $filename = rand(1000000000, 9999999999);

            if (!empty($model->logo)) {
                $model->logo->saveAs(Yii::getAlias('@newsfolder/original/') . $filename . '.' . $model->logo->extension);
                $model->logo = $filename . '.' . $model->logo->extension;
                $imagine = Image::getImagine();
                $image = $imagine->open(Yii::getAlias('@newsfolder/original/'.$model->logo));
                $image->resize(new Box(191, 120))->save(Yii::getAlias('@newsfolder/list/'.$model->logo, ['quality' => 70]));
                $image->resize(new Box(216, 135))->save(Yii::getAlias('@newsfolder/view/'.$model->logo, ['quality' => 70]));
                $image->resize(new Box(413, 209))->save(Yii::getAlias('@newsfolder/slide/'.$model->logo, ['quality' => 70]));
                $image->resize(new Box(710, 289))->save(Yii::getAlias('@newsfolder/single/'.$model->logo, ['quality' => 70]));
                $image->resize(new Box(105, 70))->save(Yii::getAlias('@newsfolder/sidebar/'.$model->logo, ['quality' => 70]));
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
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if ($this->findModel($id)->deleteNews($id)){
            Yii::$app->session->setFlash('success', 'Данный успешно удалено!');
            return $this->redirect(['index']);
        }else{
            Yii::$app->session->setFlash('error', 'Данный не удалено!');
            return $this->redirect(['index']);
        }

    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */

    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
