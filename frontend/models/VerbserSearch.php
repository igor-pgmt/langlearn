<?php

namespace frontend\models;

use frontend\models\Verbser;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * VerbSearch represents the model behind the search form about `frontend\models\Verb`.
 */
class VerbserSearch extends Verbser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kind', 'word', 'translation'], 'safe'],
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
        $query = Verbser::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            //
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'kind', $this->kind])
            ->andFilterWhere(['like', 'word', $this->word])
            ->andFilterWhere(['like', 'translation', $this->translation]);

        return $dataProvider;
    }
}
