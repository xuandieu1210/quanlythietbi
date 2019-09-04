<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nhomthietbi;

/**
 * NhomthietbiSearch represents the model behind the search form of `app\models\Nhomthietbi`.
 */
class NhomthietbiSearch extends Nhomthietbi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_nhom'], 'integer'],
            [['ten_nhom'], 'safe'],
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
        $query = Nhomthietbi::find();

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
            'id_nhom' => $this->id_nhom,
        ]);

        $query->andFilterWhere(['like', 'ten_nhom', $this->ten_nhom]);

        return $dataProvider;
    }
}
