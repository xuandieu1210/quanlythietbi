<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tram".
 *
 * @property int $id_tram
 * @property string $ten_tram
 * @property string $diachi
 * @property int $id_donvi
 * @property int $quanly
 *
 * @property Thietbi[] $thietbis
 * @property Donvi $donvi
 * @property User $quanly0
 */
class Tram extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tram';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten_tram', 'diachi', 'id_donvi', 'quanly'], 'required'],
            [['id_donvi', 'quanly'], 'integer'],
            [['ten_tram', 'diachi'], 'string', 'max' => 255],
            [['id_donvi'], 'exist', 'skipOnError' => true, 'targetClass' => Donvi::className(), 'targetAttribute' => ['id_donvi' => 'id_donvi']],
            [['quanly'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['quanly' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tram' => 'Id Tram',
            'ten_tram' => 'Ten Tram',
            'diachi' => 'Diachi',
            'id_donvi' => 'Id Donvi',
            'quanly' => 'Quanly',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThietbis()
    {
        return $this->hasMany(Thietbi::className(), ['id_tram' => 'id_tram']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonvi()
    {
        return $this->hasOne(Donvi::className(), ['id_donvi' => 'id_donvi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuanly0()
    {
        return $this->hasOne(User::className(), ['id' => 'quanly']);
    }
}
