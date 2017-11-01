<?php

namespace frontend\models;

use frontend\models\Verb;
use yii\base\Model;
use yii\data\ActiveDataProvider;

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
            [['id', 'rating', 'views'], 'integer'],
            [['perfect_verb', 'mainword', 'important', 'needhelp', 'needtranslation'], 'boolean'],
            [['infinitive_sr', 'infinitive_ru', 'infinitive_en', 'conjunction', 'others', 'meanings', 'examples', 'comment', 'related', 'related2'], 'safe'],
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
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            //
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            // 'related' => $this->related,
        ]);

        $query->orFilterWhere(['like', 'infinitive_sr', $this->infinitive_sr])
            ->orFilterWhere(['like', 'infinitive_ru', $this->infinitive_ru])
            ->orFilterWhere(['like', 'infinitive_en', $this->infinitive_en])
            ->orFilterWhere(['like', 'conjunction', $this->conjunction])
            ->orFilterWhere(['like', 'others', $this->others])

            ->orFilterWhere(['like', 'meanings', $this->meanings])
            ->orFilterWhere(['like', 'examples', $this->examples])
        //->orFilterWhere(['like', 'related', $this->related])
            ->orFilterWhere(['like', 'rating', $this->rating])
            ->orFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }

}
