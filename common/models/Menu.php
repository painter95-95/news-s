<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property string $name_uz
 * @property string $name_cor
 * @property string $name_en
 * @property string $name_ru
 * @property string $name_uc
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_cor
 * @property string $title_uc
 * @property string $url
 * @property integer $sort
 * @property string $target
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort'], 'integer'],
            [['type','name_uz', 'name_cor', 'name_en', 'name_ru', 'name_uc', 'title_uz', 'title_ru', 'title_en', 'title_cor', 'title_uc', 'url', 'target'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'name_uc' => Yii::t('app', 'Name Uc'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_uc' => Yii::t('app', 'Title Uc'),
            'url' => Yii::t('app', 'Ссилка(Url адрес)'),
            'sort' => Yii::t('app', 'Sort'),
            'target' => Yii::t('app', 'Target'),
        ];
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
}
