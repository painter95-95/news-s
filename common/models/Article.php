<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $logo
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_uc
 * @property string $title_cor
 * @property string $mini_desc_uz
 * @property string $mini_desc_ru
 * @property string $mini_desc_en
 * @property string $mini_desc_uc
 * @property string $mini_desc_cor
 * @property string $desc_uz
 * @property string $desc_ru
 * @property string $desc_en
 * @property string $desc_uc
 * @property string $desc_cor
 * @property integer $cat_id
 * @property string $token
 * @property integer $type_id
 * @property integer $status
 * @property integer $author
 * @property string $create_at
 * @property string $update_at
 *
 * @property Cat $cat
 * @property StatusId $type
 * @property User $author0
 */
class Article extends \yii\db\ActiveRecord
{
    const ENABLE = 1;
    const DISABLE = 0;
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc_uz', 'desc_ru', 'desc_en', 'desc_uc'], 'string'],
            [['cat_id', 'type_id', 'status', 'author'], 'integer'],
            [['cat_id', 'type_id', 'logo', 'status'], 'required'],
            [['create_at', 'update_at'], 'safe'],
            [['logo', 'title_uz', 'title_ru', 'title_en', 'token', 'title_uc'], 'string', 'max' => 100],
            [['mini_desc_uz', 'mini_desc_ru', 'mini_desc_en', 'mini_desc_uc' ], 'string', 'max' => 255],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cat::className(), 'targetAttribute' => ['cat_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StatusId::className(), 'targetAttribute' => ['type_id' => 'id']],
            [['author'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'logo' => Yii::t('app', 'Logo'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_uc' => Yii::t('app', 'Title Uc'),
            'mini_desc_uz' => Yii::t('app', 'Mini Desc Uz'),
            'mini_desc_ru' => Yii::t('app', 'Mini Desc Ru'),
            'mini_desc_en' => Yii::t('app', 'Mini Desc En'),
            'mini_desc_uc' => Yii::t('app', 'Mini Desc Uc'),
            'desc_uz' => Yii::t('app', 'Desc Uz'),
            'desc_ru' => Yii::t('app', 'Desc Ru'),
            'desc_en' => Yii::t('app', 'Desc En'),
            'desc_uc' => Yii::t('app', 'Desc Uc'),
            'cat_id' => Yii::t('app', 'Cat ID'),
            'token' => Yii::t('app', 'Token'),
            'type_id' => Yii::t('app', 'Type ID'),
            'status' => Yii::t('app', 'Status'),
            'author' => Yii::t('app', 'Author'),
            'create_at' => Yii::t('app', 'Create At'),
            'update_at' => Yii::t('app', 'Update At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Cat::className(), ['id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(StatusId::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author']);
    }


    public  function langTitle(){
        if (\Yii::$app->language=='uz'){
            return $this->title_uz;
        }
        if (\Yii::$app->language=='ru'){
            return $this->title_ru;
        }
        if (\Yii::$app->language=='en'){
            return $this->title_en;
        }
        if (\Yii::$app->language=='cor'){
            return $this->title_cor;
        }
        if (\Yii::$app->language=='uc'){
            return $this->title_uc;
        }
    }

    public  function langMinidesc(){
        if (\Yii::$app->language=='uz'){
            return $this->mini_desc_uz;
        }
        if (\Yii::$app->language=='ru'){
            return $this->mini_desc_ru;
        }
        if (\Yii::$app->language=='en'){
            return $this->mini_desc_en;
        }
        if (\Yii::$app->language=='uc'){
            return $this->mini_desc_uc;
        }
    }
    public  function langDesc(){
        if (\Yii::$app->language=='uz'){
            return $this->desc_uz;
        }
        if (\Yii::$app->language=='ru'){
            return $this->desc_ru;
        }
        if (\Yii::$app->language=='en'){
            return $this->desc_en;
        }
        if (\Yii::$app->language=='uc'){
            return $this->desc_uc;
        }
    }

    public function deleteArt($id){
        $this->id = $id;
        @unlink(Yii::getAlias('@newsfolder/original/' . $this->logo));
        @unlink(Yii::getAlias('@newsfolder/list/' . $this->logo));
        @unlink(Yii::getAlias('@newsfolder/view/' . $this->logo));
        @unlink(Yii::getAlias('@newsfolder/single/' . $this->logo));
        @unlink(Yii::getAlias('@newsfolder/sidebar/' . $this->logo));
        return $this->delete() ? $this : null;
    }



    public function viewArticle($id, $session, $cat_id)
    {
        $view = new ViewPost();
        $view->post_id = $id;
        $view->cat_id = $cat_id;
        $view->session = $session;
        return $view->save() ? $view :null;
    }

    public function viewLog($params, $cat_id)
    {
        $log = ViewPost::find()->where(['post_id' => $params, 'cat_id'=>$cat_id])->count();
        if ($log!=null){
            return $log;
        }
    }
}
