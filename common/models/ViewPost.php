<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "view_post".
 *
 * @property integer $id
 * @property integer $cat_id
 * @property string $session
 * @property integer $user_id
 * @property integer $view
 * @property integer $post_id
 */
class ViewPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'view_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'user_id', 'view', 'post_id'], 'integer'],
            [['session'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'cat_id' => Yii::t('app', 'Cat ID'),
            'session' => Yii::t('app', 'Session'),
            'user_id' => Yii::t('app', 'User ID'),
            'view' => Yii::t('app', 'View'),
            'post_id' => Yii::t('app', 'Post ID'),
        ];
    }
}
