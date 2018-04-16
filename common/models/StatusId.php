<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "status_id".
 *
 * @property integer $id
 * @property string $create_at
 * @property string $update_at
 * @property string $post_id
 * @property string $name
 * @property string $date_start
 * @property string $date_end
 *
 * @property Article[] $articles
 * @property News[] $news
 */
class StatusId extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status_id';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_at', 'update_at', 'date_start', 'date_end'], 'safe'],
            [['post_id', 'name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'create_at' => Yii::t('app', 'Create At'),
            'update_at' => Yii::t('app', 'Update At'),
            'post_id' => Yii::t('app', 'Post ID'),
            'name' => Yii::t('app', 'Name'),
            'date_start' => Yii::t('app', 'Date Start'),
            'date_end' => Yii::t('app', 'Date End'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['type_id' => 'id']);
    }
}
