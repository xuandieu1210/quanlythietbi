<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thuoctinh".
 *
 * @property int $id_thuoctinh
 * @property string $ten_thuoctinh
 * @property string $donvitinh
 *
 * @property ThietbiThuoctinh[] $thietbiThuoctinhs
 */
class Thuoctinh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thuoctinh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten_thuoctinh', 'donvitinh'], 'required'],
            [['ten_thuoctinh', 'donvitinh'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_thuoctinh' => 'Id Thuoctinh',
            'ten_thuoctinh' => 'Ten Thuoctinh',
            'donvitinh' => 'Donvitinh',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThietbiThuoctinhs()
    {
        return $this->hasMany(ThietbiThuoctinh::className(), ['id_thuoctinh' => 'id_thuoctinh']);
    }
}
