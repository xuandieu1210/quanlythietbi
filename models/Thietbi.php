<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thietbi".
 *
 * @property int $id_thietbi
 * @property string $ten_thietbi
 * @property int $id_nhom
 * @property int $id_tram
 * @property int $status
 *
 * @property Nhomthietbi $nhom
 * @property Tram $tram
 * @property ThietbiThuoctinh[] $thietbiThuoctinhs
 */
class Thietbi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thietbi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten_thietbi', 'id_nhom', 'id_tram', 'status'], 'required'],
            [['id_nhom', 'id_tram', 'status'], 'integer'],
            [['ten_thietbi'], 'string', 'max' => 255],
            [['id_nhom'], 'exist', 'skipOnError' => true, 'targetClass' => Nhomthietbi::className(), 'targetAttribute' => ['id_nhom' => 'id_nhom']],
            [['id_tram'], 'exist', 'skipOnError' => true, 'targetClass' => Tram::className(), 'targetAttribute' => ['id_tram' => 'id_tram']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_thietbi' => 'Id Thietbi',
            'ten_thietbi' => 'Ten Thietbi',
            'id_nhom' => 'Id Nhom',
            'id_tram' => 'Id Tram',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNhom()
    {
        return $this->hasOne(Nhomthietbi::className(), ['id_nhom' => 'id_nhom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTram()
    {
        return $this->hasOne(Tram::className(), ['id_tram' => 'id_tram']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThietbiThuoctinhs()
    {
        return $this->hasMany(ThietbiThuoctinh::className(), ['id_thietbi' => 'id_thietbi']);
    }
}
