<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Verb;

/**
 * VerbSearch represents the model behind the search form about `frontend\models\Verb`.
 */
class VerbSearch extends Verb
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rating'], 'integer'],
            [['mainword'], 'boolean'],
            [['infinitive','conjunction', 'others', 'meanings', 'examples', 'related',], 'safe'],
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
        $query = Verb::find();

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
            'related' => $this->related,
        ]);

        $query->andFilterWhere(['like', 'infinitive', $this->infinitive])
            ->andFilterWhere(['like', 'conjunction', $this->conjunction])
            ->andFilterWhere(['like', 'others', $this->others])
            ->andFilterWhere(['like', 'meanings', $this->meanings])
            ->andFilterWhere(['like', 'examples', $this->examples])
            ->andFilterWhere(['like', 'related', $this->related])
            ->andFilterWhere(['like', 'rating', $this->rating]);

        return $dataProvider;
    }
}
