<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Thietbi;

/**
 * ThietbiSearch represents the model behind the search form of `app\models\Thietbi`.
 */
class ThietbiSearch extends Thietbi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_thietbi', 'id_nhom', 'id_tram', 'status'], 'integer'],
            [['ten_thietbi'], 'safe'],
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
        $query = Thietbi::find();

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
            'id_thietbi' => $this->id_thietbi,
            'id_nhom' => $this->id_nhom,
            'id_tram' => $this->id_tram,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'ten_thietbi', $this->ten_thietbi]);

        return $dataProvider;
    }
}
