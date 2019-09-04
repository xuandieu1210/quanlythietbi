<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Thuoctinh;

/**
 * ThuoctinhSearch represents the model behind the search form of `app\models\Thuoctinh`.
 */
class ThuoctinhSearch extends Thuoctinh
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_thuoctinh'], 'integer'],
            [['ten_thuoctinh', 'donvitinh'], 'safe'],
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
        $query = Thuoctinh::find();

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
            'id_thuoctinh' => $this->id_thuoctinh,
        ]);

        $query->andFilterWhere(['like', 'ten_thuoctinh', $this->ten_thuoctinh])
            ->andFilterWhere(['like', 'donvitinh', $this->donvitinh]);

        return $dataProvider;
    }
}
