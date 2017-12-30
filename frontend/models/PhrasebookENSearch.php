<?php

namespace frontend\models;

use frontend\models\PhrasebookEN;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * PhrasebookENSearch represents the model behind the search form about `frontend\models\PhrasebookEN`.
 */
class PhrasebookENSearch extends PhrasebookEN
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['important', 'needhelp', 'word'], 'boolean'],
            [['topic', 'header', 'russian', 'serbian', 'english', 'comment'], 'safe'],
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
        $query = PhrasebookEN::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 100],
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]],
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
        ]);

        $query->andFilterWhere(['like', 'topic', $this->topic])
            ->andFilterWhere(['like', 'header', $this->header])
            ->andFilterWhere(['like', 'russian', $this->russian])
            ->andFilterWhere(['like', 'serbian', $this->serbian])
            ->andFilterWhere(['like', 'english', $this->english])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'important', $this->important])
            ->andFilterWhere(['like', 'needhelp', $this->needhelp])
            ->andFilterWhere(['like', 'word', $this->word]);

        return $dataProvider;
    }
}
