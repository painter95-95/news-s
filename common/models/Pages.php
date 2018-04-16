<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $id
 * @property string $name
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_cor
 * @property string $title_uc
 * @property string $desc_uz
 * @property string $desc_en
 * @property string $desc_ru
 * @property string $desc_uc
 * @property string $desc_cor
 * @property string $logo
 * @property string $post_id
 * @property string $alias
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc_uz', 'desc_en', 'desc_ru', 'desc_uc', 'desc_cor'], 'string'],
            [['name', 'title_uz', 'title_ru', 'title_en', 'title_cor', 'title_uc', 'alias'], 'string', 'max' => 255],
            [['logo'], 'string', 'max' => 100],
            [['token'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_cor' => Yii::t('app', 'Title Cor'),
            'title_uc' => Yii::t('app', 'Title Uc'),
            'desc_uz' => Yii::t('app', 'Desc Uz'),
            'desc_en' => Yii::t('app', 'Desc En'),
            'desc_ru' => Yii::t('app', 'Desc Ru'),
            'desc_uc' => Yii::t('app', 'Desc Uc'),
            'desc_cor' => Yii::t('app', 'Desc Cor'),
            'logo' => Yii::t('app', 'Logo'),
            'post_id' => Yii::t('app', 'Post ID'),
            'alias' => Yii::t('app', 'Alias'),
        ];
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
        if (\Yii::$app->language=='cor'){
            return $this->desc_cor;
        }
        if (\Yii::$app->language=='uc'){
            return $this->desc_uc;
        }
    }

    public function deletePages($id){
        $this->id = $id;
        @unlink(Yii::getAlias('@newsfolder/original/' . $this->logo));
        @unlink(Yii::getAlias('@newsfolder/list/' . $this->logo));
        @unlink(Yii::getAlias('@newsfolder/single/' . $this->logo));
        return $this->delete() ? $this : null;
    }
}
