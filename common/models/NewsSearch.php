<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\News;

/**
 * NewsSearch represents the model behind the search form about `common\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cat_id', 'author', 'status', 'type_id', 'type_cat'], 'integer'],
            [['logo', 'title_uz', 'title_ru', 'title_en', 'title_uc', 'mini_desc_uz', 'mini_desc_ru', 'mini_desc_en', 'mini_desc_uc', 'desc_uz', 'desc_ru', 'desc_en', 'desc_uc', 'create_at', 'update_at', 'token'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = News::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'cat_id' => $this->cat_id,
            'author' => $this->author,
            'status' => $this->status,
            'type_id' => $this->type_id,
            'type_cat' => $this->type_cat,
        ]);

        $query->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'title_uc', $this->title_uc])
            ->andFilterWhere(['like', 'mini_desc_uz', $this->mini_desc_uz])
            ->andFilterWhere(['like', 'mini_desc_ru', $this->mini_desc_ru])
            ->andFilterWhere(['like', 'mini_desc_en', $this->mini_desc_en])
            ->andFilterWhere(['like', 'mini_desc_uc', $this->mini_desc_uc])
            ->andFilterWhere(['like', 'desc_uz', $this->desc_uz])
            ->andFilterWhere(['like', 'desc_ru', $this->desc_ru])
            ->andFilterWhere(['like', 'desc_en', $this->desc_en])
            ->andFilterWhere(['like', 'desc_uc', $this->desc_uc])
            ->andFilterWhere(['like', 'token', $this->token]);

        return $dataProvider;
    }
}
