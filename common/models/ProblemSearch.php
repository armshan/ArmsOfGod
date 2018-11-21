<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Problem;

/**
 * ProblemSearch represents the model behind the search form of `common\models\Problem`.
 */
class ProblemSearch extends Problem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'CateId', 'Sort'], 'integer'],
            [['Name', 'Content', 'CreateTime'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Problem::find();

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
            'ID' => $this->ID,
            'CateId' => $this->CateId,
            'Sort' => $this->Sort,
            'CreateTime' => $this->CreateTime,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Content', $this->Content]);

        return $dataProvider;
    }
}
