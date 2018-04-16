<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "childmenu".
 *
 * @property integer $id
 * @property string $name_ru
 * @property string $name_en
 * @property string $name_uz
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $url
 * @property integer $menu_id
 * @property integer $sort
 *
 * @property Menu $menu
 */
class Childmenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'childmenu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'sort'], 'integer'],
            [['name_ru', 'name_en', 'name_uz', 'title_uz', 'title_ru', 'title_en', 'url'], 'string', 'max' => 255],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['menu_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'url' => Yii::t('app', 'Url'),
            'menu_id' => Yii::t('app', 'Menu ID'),
            'sort' => Yii::t('app', 'Sort'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
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
        if (\Yii::$app->language=='cor'){
            return $this->name_cor;
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
        if (\Yii::$app->language=='cor'){
            return $this->title_cor;
        }
        if (\Yii::$app->language=='uc'){
            return $this->title_uc;
        }
    }
}
