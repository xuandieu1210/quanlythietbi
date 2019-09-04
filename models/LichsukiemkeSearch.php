<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lichsukiemke;

/**
 * LichsukiemkeSearch represents the model behind the search form of `app\models\Lichsukiemke`.
 */
class LichsukiemkeSearch extends Lichsukiemke
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lichsu', 'id_thietbi', 'id_dot'], 'integer'],
            [['ghichu'], 'safe'],
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
        $query = Lichsukiemke::find();

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
            'id_lichsu' => $this->id_lichsu,
            'id_thietbi' => $this->id_thietbi,
            'id_dot' => $this->id_dot,
        ]);

        $query->andFilterWhere(['like', 'ghichu', $this->ghichu]);

        return $dataProvider;
    }
}
