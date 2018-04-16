<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cat".
 *
 * @property integer $id
 * @property integer $type_post
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $name_cor
 * @property string $name_uc
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_cor
 * @property string $title_uc
 * @property string $logo
 *
 * @property Article[] $articles
 * @property Facts[] $facts
 * @property News[] $news
 * @property Photos[] $photos
 * @property Subscribe[] $subscribes
 * @property Videos[] $videos
 */
class Cat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_post'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'name_uc', 'token'], 'string', 'max' => 100],
            [['title_uz', 'title_ru', 'title_en', 'title_uc', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type_post' => Yii::t('app', 'Сортировка'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_uc' => Yii::t('app', 'Name Uc'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_uc' => Yii::t('app', 'Title Uc'),
            'logo' => Yii::t('app', 'Logo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['cat_id' => 'id']);
    }


    public  function langName(){
        if (\Yii::$app->language=='uz'){
            return $this->name_uz;
        }
        if (\Yii::$app->language=='ru'){
            return $this->name_ru;
        }
        if (\Yii::$app->language=='en'){
            return $this->name_en;
        }
        if (\Yii::$app->language=='uc'){
            return $this->name_uc;
        }
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
        if (\Yii::$app->language=='uc'){
            return $this->title_uc;
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacts()
    {
        return $this->hasMany(Facts::className(), ['cat_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['cat_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photos::className(), ['cat_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubscribes()
    {
        return $this->hasMany(Subscribe::className(), ['cat_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideos()
    {
        return $this->hasMany(Videos::className(), ['cat_id' => 'id']);
    }

    public function CatItems($id){
      $news_count = News::find()->where(['cat_id'=>$id])->count();
      return $news_count;

    }

}
