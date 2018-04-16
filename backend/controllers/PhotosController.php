<?php

namespace backend\controllers;

use Yii;
use common\models\Photos;
use common\models\PhotosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\imagine\Image;
use Imagine\Image\Box;
use yii\web\UploadedFile;
Yii::setAlias('newsfolder', dirname(dirname(__DIR__)) . '/frontend/web/images/photos/');
class PhotosController extends Controller
{
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
     * Lists all Photos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PhotosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    
    public function actionCreate()
    {
        $model = new Photos();
        if ($model->load(Yii::$app->request->post())) {
            $filename = rand(1000000000, 9999999999);
            $model->token = rand(1000000, 9999999);
            $model->logo = UploadedFile::getInstance($model,'logo');
            if (!empty($model->logo)){
                $model->logo->saveAs( Yii::getAlias('@newsfolder/original/').$filename.'.'.$model->logo->extension );
                $model->logo =  $filename.'.'.$model->logo->extension;
                $imagine = Image::getImagine();
                $image = $imagine->open(Yii::getAlias('@newsfolder/original/'.$model->logo));
                $image->resize(new Box(191, 120))->save(Yii::getAlias('@newsfolder/list/'.$model->logo, ['quality' => 70]));
                $image->resize(new Box(710, 289))->save(Yii::getAlias('@newsfolder/single/'.$model->logo, ['quality' => 70]));
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
    
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->logo = UploadedFile::getInstance($model, 'logo');
            if (!empty($model->logo) || isset($model->logo)){
                @unlink(Yii::getAlias('@newsfolder/original/' . $this->findModel($id)->logo));
                @unlink(Yii::getAlias('@newsfolder/list/' . $this->findModel($id)->logo));
                @unlink(Yii::getAlias('@newsfolder/single/' . $this->findModel($id)->logo));

                // get the instance of the uploaded file
                $filename = rand(1000000000, 9999999999);

                if (!empty($model->logo)) {
                    $model->logo->saveAs(Yii::getAlias('@newsfolder/original/') . $filename . '.' . $model->logo->extension);
                    $model->logo = $filename . '.' . $model->logo->extension;
                    $imagine = Image::getImagine();
                    $image = $imagine->open(Yii::getAlias('@newsfolder/original/'.$model->logo));
                    $image->resize(new Box(191, 120))->save(Yii::getAlias('@newsfolder/list/'.$model->logo, ['quality' => 70]));
                    $image->resize(new Box(710, 289))->save(Yii::getAlias('@newsfolder/single/'.$model->logo, ['quality' => 70]));
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
    
    public function actionDelete($id)
    {
        if ($this->findModel($id)->deletePhoto($id)){
            Yii::$app->session->setFlash('success', 'Данный успешно удалено!');
            return $this->redirect(['index']);
        }else{
            Yii::$app->session->setFlash('error', 'Данный не удалено!');
            return $this->redirect(['index']);
        }

    }

    protected function findModel($id)
    {
        if (($model = Photos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
