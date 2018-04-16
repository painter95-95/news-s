<?php

namespace common\models;

use Yii;


class Facts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'facts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc_ru', 'desc_en', 'desc_cor', 'desc_uc', 'desc_uz'], 'string'],
            [['create_at', 'update_at'], 'safe'],
            [['status', 'type_id', 'cat_id', 'author', 'token'], 'integer'],
            [['by', 'logo', 'title_uz', 'title_ru', 'title_en', 'title_cor', 'title_uc'], 'string', 'max' => 100],
            [['mini_desc_uz', 'mini_desc_ru', 'mini_desc_en', 'mini_desc_cor', 'mini_desc_uc'], 'string', 'max' => 255],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cat::className(), 'targetAttribute' => ['cat_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StatusId::className(), 'targetAttribute' => ['type_id' => 'id']],
            [['author'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'logo' => Yii::t('app', 'Logo'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_cor' => Yii::t('app', 'Title Cor'),
            'title_uc' => Yii::t('app', 'Title Uc'),
            'mini_desc_uz' => Yii::t('app', 'Mini Desc Uz'),
            'mini_desc_ru' => Yii::t('app', 'Mini Desc Ru'),
            'mini_desc_en' => Yii::t('app', 'Mini Desc En'),
            'mini_desc_cor' => Yii::t('app', 'Mini Desc Cor'),
            'mini_desc_uc' => Yii::t('app', 'Mini Desc Uc'),
            'desc_uz' => Yii::t('app', 'Desc Uz'),
            'desc_ru' => Yii::t('app', 'Desc Ru'),
            'desc_en' => Yii::t('app', 'Desc En'),
            'desc_cor' => Yii::t('app', 'Desc Cor'),
            'desc_uc' => Yii::t('app', 'Desc Uc'),
            'create_at' => Yii::t('app', 'Create At'),
            'update_at' => Yii::t('app', 'Update At'),
            'status' => Yii::t('app', 'Status'),
            'type_id' => Yii::t('app', 'Type ID'),
            'cat_id' => Yii::t('app', 'Cat ID'),
            'author' => Yii::t('app', 'Author'),
            'token' => Yii::t('app', 'Token'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Cat::className(), ['id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(StatusId::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor0()
    {
        return $this->hasOne(User::className(), ['id' => 'author']);
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

    public  function langMinidesc(){
        if (\Yii::$app->language=='uz'){
            return $this->mini_desc_uz;
        }
        if (\Yii::$app->language=='ru'){
            return $this->mini_desc_ru;
        }
        if (\Yii::$app->language=='en'){
            return $this->mini_desc_en;
        }
        if (\Yii::$app->language=='cor'){
            return $this->mini_desc_cor;
        }
        if (\Yii::$app->language=='uc'){
            return $this->mini_desc_uc;
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


    public function deleteFacts($id){
        $this->id = $id;
        @unlink(Yii::getAlias('@newsfolder/original/' . $this->logo));
        @unlink(Yii::getAlias('@newsfolder/list/' . $this->logo));
        @unlink(Yii::getAlias('@newsfolder/single/' . $this->logo));
        return $this->delete() ? $this : null;
    }
}
