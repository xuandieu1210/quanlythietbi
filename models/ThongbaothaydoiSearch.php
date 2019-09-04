<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Thongbaothaydoi;

/**
 * ThongbaothaydoiSearch represents the model behind the search form of `app\models\Thongbaothaydoi`.
 */
class ThongbaothaydoiSearch extends Thongbaothaydoi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_thongbao', 'id_thietbi', 'id_tramnguon', 'id_tramdich', 'created_at'], 'integer'],
            [['noidung'], 'safe'],
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
        $query = Thongbaothaydoi::find();

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
            'id_thongbao' => $this->id_thongbao,
            'id_thietbi' => $this->id_thietbi,
            'id_tramnguon' => $this->id_tramnguon,
            'id_tramdich' => $this->id_tramdich,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'noidung', $this->noidung]);

        return $dataProvider;
    }
}
