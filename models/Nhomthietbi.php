<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nhomthietbi".
 *
 * @property int $id_nhom
 * @property string $ten_nhom
 *
 * @property Thietbi[] $thietbis
 */
class Nhomthietbi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nhomthietbi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten_nhom'], 'required'],
            [['ten_nhom'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_nhom' => 'Id Nhom',
            'ten_nhom' => 'Ten Nhom',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThietbis()
    {
        return $this->hasMany(Thietbi::className(), ['id_nhom' => 'id_nhom']);
    }
}
