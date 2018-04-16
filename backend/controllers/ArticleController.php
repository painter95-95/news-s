<?php

namespace backend\controllers;
use yii\filters\AccessControl;
use Yii;
use common\models\Article;
use common\models\ArticleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\imagine\Image;
use Imagine\Image\Box;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;
Yii::setAlias('newsfolder', dirname(dirname(__DIR__)) . '/frontend/web/images/article/');

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
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
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
        ]);
    }

    /**
     * Displays a single Article model.
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
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Article();
        if ($model->load(Yii::$app->request->post())) {
            $filename = rand(1000000000, 9999999999);
            $num = rand(0, 9999);
            $model->token = substr(hash("sha256",$num), 0, 8);
            $model->create_at = date('Y-m-d H:i:s');
            $model->author = Yii::$app->user->identity->id;
            $model->logo = UploadedFile::getInstance($model,'logo');
            if (!empty($model->logo)){
                $model->logo->saveAs( Yii::getAlias('@newsfolder/original/').$filename.'.'.$model->logo->extension );
                $model->logo =  $filename.'.'.$model->logo->extension;
                $imagine = Image::getImagine();
                $image = $imagine->open(Yii::getAlias('@newsfolder/original/'.$model->logo));
                $image->resize(new Box(191, 120))->save(Yii::getAlias('@newsfolder/list/'.$model->logo, ['quality' => 70]));
                $image->resize(new Box(340, 229))->save(Yii::getAlias('@newsfolder/view/'.$model->logo, ['quality' => 70]));
                $image->resize(new Box(710, 360))->save(Yii::getAlias('@newsfolder/single/'.$model->logo, ['quality' => 70]));
                $image->resize(new Box(105, 70))->save(Yii::getAlias('@newsfolder/sidebar/'.$model->logo, ['quality' => 70]));
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
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
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
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if ($this->findModel($id)->deleteArt($id)){
            Yii::$app->session->setFlash('success', 'Данный успешно удалено!');
            return $this->redirect(['index']);
        }else{
            Yii::$app->session->setFlash('error', 'Данный не удалено!');
            return $this->redirect(['index']);
        }

    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
