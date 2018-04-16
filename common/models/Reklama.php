<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reklama".
 *
 * @property integer $id
 * @property string $image
 * @property string $type
 * @property integer $status
 * @property string $create_at
 * @property string $update_at
 */
class Reklama extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reklama';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['status', 'image', 'type'], 'required'],
            [['create_at', 'update_at'], 'safe'],
            [['image', 'alias', 'type'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
            'type' => Yii::t('app', 'Type'),
            'status' => Yii::t('app', 'Status'),
            'alias' => Yii::t('app', 'Url Address'),
            'create_at' => Yii::t('app', 'Create At'),
            'update_at' => Yii::t('app', 'Update At'),
        ];
    }

    /**
     * @return string
     */
    public function getBottom()
    {
        $var = Reklama::find()->orderBy(['create_at' => DESC])->where(['type' => 'bottom'])->one();
        if ($var != null){
            return $var;
        }
    }
    public function getLeftsidebar()
    {
        $var = Reklama::find()->orderBy(['create_at' => DESC])->where(['type' => 'left_sidebar'])->one();
        if ($var != null){
            return $var;
        }
    }
    public function getRightsidebar()
    {
        $var = Reklama::find()->orderBy(['create_at' => DESC])->where(['type' => 'right_sidebar'])->one();
        if ($var->image != null){
            return $var->image;
        }
    }
    public function getAllbanner()
    {
        $var = Reklama::find()->orderBy(['create_at' => DESC])->where(['type' => 'banner'])->all();
        if ($var != null){
            return $var;
        }
    }
}
