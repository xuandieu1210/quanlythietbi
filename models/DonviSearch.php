<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Donvi;

/**
 * DonviSearch represents the model behind the search form of `app\models\Donvi`.
 */
class DonviSearch extends Donvi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_donvi', 'cap', 'captren'], 'integer'],
            [['ten_donvi', 'diachi'], 'safe'],
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
        $query = Donvi::find();

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
            'id_donvi' => $this->id_donvi,
            'cap' => $this->cap,
            'captren' => $this->captren,
        ]);

        $query->andFilterWhere(['like', 'ten_donvi', $this->ten_donvi])
            ->andFilterWhere(['like', 'diachi', $this->diachi]);

        return $dataProvider;
    }
}
