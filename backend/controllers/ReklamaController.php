<?php

namespace backend\controllers;

use Yii;
use common\models\Reklama;
use common\models\ReklamaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\imagine\Image;
use Imagine\Image\Box;
use yii\web\UploadedFile;

Yii::setAlias('newsfolder', dirname(dirname(__DIR__)) . '/frontend/web/images/new/');

/**
 * ReklamaController implements the CRUD actions for Reklama model.
 */
class ReklamaController extends Controller
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
     * Lists all Reklama models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReklamaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Reklama model.
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
     * Creates a new Reklama model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Reklama();
        if ($model->load(Yii::$app->request->post())) {
            $model->create_at = date('Y-m-d H:i:s');
            $filename = rand(1000000000, 9999999999);
            $model->image = UploadedFile::getInstance($model,'image');
            if (!empty($model->image)){
                $model->image->saveAs( Yii::getAlias('@newsfolder/original/').$filename.'.'.$model->image->extension );
                $model->image =  $filename.'.'.$model->image->extension;
                $imagine = Image::getImagine();
                $image = $imagine->open(Yii::getAlias('@newsfolder/original/'.$model->image));
                if ($model->type == 'banner'){
                    $image->resize(new Box(670, 90))->save(Yii::getAlias('@newsfolder/'.$model->image, ['quality' => 70]));
                }
                if ($model->type == 'left_sidebar'){
                    $image->resize(new Box(181, 209))->save(Yii::getAlias('@newsfolder/'.$model->image, ['quality' => 70]));
                }
                if ($model->type == 'bottom' || $model->type == 'right_sidebar'){
                    $image->resize(new Box(300, 422))->save(Yii::getAlias('@newsfolder/'.$model->image, ['quality' => 70]));
                }

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
     * Updates an existing Reklama model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Reklama model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Reklama model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Reklama the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Reklama::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
