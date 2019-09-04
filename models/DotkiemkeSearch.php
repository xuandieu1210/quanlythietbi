<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dotkiemke;

/**
 * DotkiemkeSearch represents the model behind the search form of `app\models\Dotkiemke`.
 */
class DotkiemkeSearch extends Dotkiemke
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dot', 'id_tram', 'created_at', 'created_by'], 'integer'],
            [['ten_dot'], 'safe'],
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
        $query = Dotkiemke::find();

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
            'id_dot' => $this->id_dot,
            'id_tram' => $this->id_tram,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'ten_dot', $this->ten_dot]);

        return $dataProvider;
    }
}
