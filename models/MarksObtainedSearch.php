<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MarksObtained;

/**
 * MarksObtainedSearch represents the model behind the search form of `app\models\MarksObtained`.
 */
class MarksObtainedSearch extends MarksObtained
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marks_obtained', 'marks', 'student', 'total_marks'], 'integer'],
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
        $query = MarksObtained::find();

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
            'marks_obtained' => $this->marks_obtained,
            'marks' => $this->marks,
            'student' => $this->student,
            'total_marks' => $this->total_marks,
        ]);

        return $dataProvider;
    }
}
