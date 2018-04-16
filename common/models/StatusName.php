<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "status_name".
 *
 * @property integer $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $name_uc
 * @property string $name_cor
 *
 * @property StatusId[] $statuses
 */
class StatusName extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status_name';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'name_uc', 'name_cor'], 'string', 'max' => 100],
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
            'name_ru' => Yii::t('app', 'Name Ru'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_uc' => Yii::t('app', 'Name Uc'),
            'name_cor' => Yii::t('app', 'Name Cor'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatuses()
    {
        return $this->hasMany(StatusId::className(), ['status_id' => 'id']);
    }
}
