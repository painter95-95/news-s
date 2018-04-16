<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "photos".
 *
 * @property integer $id
 * @property string $path
 * @property integer $cat_id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_uc
 * @property string $title_cor
 * @property string $create_at
 * @property string $update_at
 *
 * @property Cat $cat
 */
class Photos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['path', 'title_uz', 'title_ru', 'title_en', 'title_uc', 'title_cor'], 'string', 'max' => 255],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cat::className(), 'targetAttribute' => ['cat_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'path' => Yii::t('app', 'Path'),
            'cat_id' => Yii::t('app', 'Cat ID'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_uc' => Yii::t('app', 'Title Uc'),
            'title_cor' => Yii::t('app', 'Title Cor'),
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

    public function deletePhoto($id){
        $this->id = $id;
        @unlink(Yii::getAlias('@newsfolder/original/' . $this->logo));
        @unlink(Yii::getAlias('@newsfolder/list/' . $this->logo));
        @unlink(Yii::getAlias('@newsfolder/view/' . $this->logo));
        @unlink(Yii::getAlias('@newsfolder/single/' . $this->logo));
        return $this->delete() ? $this : null;
    }
}
