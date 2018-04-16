<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "follow".
 *
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property string $icon
 * @property integer $sort
 * @property integer $like
 * @property integer $view
 * @property integer $type
 */
class Follow extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'follow';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort', 'like', 'view', 'type'], 'integer'],
            [['name', 'alias', 'icon'], 'string', 'max' => 100],
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
            'alias' => Yii::t('app', 'Alias'),
            'icon' => Yii::t('app', 'Icon'),
            'sort' => Yii::t('app', 'Sort'),
            'like' => Yii::t('app', 'Like'),
            'view' => Yii::t('app', 'View'),
            'type' => Yii::t('app', 'Type'),
        ];
    }
}
