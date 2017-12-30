<?php

namespace frontend\models;

use frontend\models\VerbEN;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * VerbENSearch represents the model behind the search form about `frontend\models\VerbEN`.
 */
class VerbENSearch extends VerbEN
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rating', 'views', 'reflexive_verb'], 'integer'],
            [['perfect_verb', 'mainword', 'important', 'needhelp', 'needtranslation'], 'boolean'],
            [['infinitive_sr', 'infinitive_ru', 'infinitive_en', 'conjunction', 'others', 'meanings', 'examples', 'examples_ref', 'comment', 'related', 'related2'], 'safe'],
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
        $query = VerbEN::find();

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
            ->orFilterWhere(['like', 'perfect_verb', $this->perfect_verb])
            ->orFilterWhere(['like', 'reflexive_verb', $this->reflexive_verb])
        //->orFilterWhere(['like', 'related', $this->related])
            ->orFilterWhere(['like', 'rating', $this->rating])
            ->orFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }

}
