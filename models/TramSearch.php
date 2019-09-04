<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tram;

/**
 * TramSearch represents the model behind the search form of `app\models\Tram`.
 */
class TramSearch extends Tram
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tram', 'id_donvi', 'quanly'], 'integer'],
            [['ten_tram', 'diachi'], 'safe'],
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
        $query = Tram::find();

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
            'id_tram' => $this->id_tram,
            'id_donvi' => $this->id_donvi,
            'quanly' => $this->quanly,
        ]);

        $query->andFilterWhere(['like', 'ten_tram', $this->ten_tram])
            ->andFilterWhere(['like', 'diachi', $this->diachi]);

        return $dataProvider;
    }
}
