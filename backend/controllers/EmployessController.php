<?php

namespace backend\controllers;

use Yii;
use common\models\Employess;
use common\models\EmployessSearch;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;
use Imagine\Image\Box;
Yii::setAlias('newsfolder', dirname(dirname(__DIR__)) . '/frontend/web/extraimages/');

/**
 * EmployessController implements the CRUD actions for Employess model.
 */
class EmployessController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index', 'view', 'create', 'update', 'delete'],
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

    /**
     * Lists all Employess models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmployessSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Employess model.
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
     * Creates a new Employess model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Employess();
        if ($model->load(Yii::$app->request->post())) {
            // get the instance of the uploaded file
            $filename = rand(1000000000, 9999999999);
            $model->logo = UploadedFile::getInstance($model,'logo');
            if (!empty($model->logo)){
                $model->logo->saveAs( Yii::getAlias('@newsfolder/original/').$filename.'.'.$model->logo->extension );
                $model->logo =  $filename.'.'.$model->logo->extension;
                $imagine = Image::getImagine();
                $image = $imagine->open(Yii::getAlias('@newsfolder/original/'.$model->logo));
                $image->resize(new Box(270, 270))->save(Yii::getAlias('@newsfolder/'.$model->logo, ['quality' => 70]));
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
     * Updates an existing Employess model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            if (!empty($this->findModel($id)->logo)){

                @unlink(Yii::getAlias('@newsfolder/' . $this->findModel($id)->logo));
                @unlink(Yii::getAlias('@newsfolder/original/' . $this->findModel($id)->logo));
            }
            // get the instance of the uploaded file
            $filename = rand(1000000000, 9999999999);
            $model->logo = UploadedFile::getInstance($model, 'logo');
            if (!empty($model->logo)) {
                $model->logo->saveAs(Yii::getAlias('@newsfolder/original/') . $filename . '.' . $model->logo->extension);
                $model->logo = $filename . '.' . $model->logo->extension;
                $imagine = Image::getImagine();
                $image = $imagine->open(Yii::getAlias('@newsfolder/original/'.$model->logo));
                $image->resize(new Box(270, 270))->save(Yii::getAlias('@newsfolder/'.$model->logo, ['quality' => 70]));
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
     * Deletes an existing Employess model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        @unlink(Yii::getAlias('@newsfolder/'.$this->findModel($id)->logo));
        @unlink(Yii::getAlias('@newsfolder/original/'.$this->findModel($id)->logo));
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Employess model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Employess the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Employess::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
