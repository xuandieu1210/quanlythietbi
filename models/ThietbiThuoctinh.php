<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thietbi_thuoctinh".
 *
 * @property int $id
 * @property int $id_thietbi
 * @property int $id_thuoctinh
 * @property string $value
 *
 * @property Thietbi $thietbi
 * @property Thuoctinh $thuoctinh
 */
class ThietbiThuoctinh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thietbi_thuoctinh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_thietbi', 'id_thuoctinh', 'value'], 'required'],
            [['id_thietbi', 'id_thuoctinh'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['id_thietbi'], 'exist', 'skipOnError' => true, 'targetClass' => Thietbi::className(), 'targetAttribute' => ['id_thietbi' => 'id_thietbi']],
            [['id_thuoctinh'], 'exist', 'skipOnError' => true, 'targetClass' => Thuoctinh::className(), 'targetAttribute' => ['id_thuoctinh' => 'id_thuoctinh']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_thietbi' => 'Id Thietbi',
            'id_thuoctinh' => 'Id Thuoctinh',
            'value' => 'Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThietbi()
    {
        return $this->hasOne(Thietbi::className(), ['id_thietbi' => 'id_thietbi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThuoctinh()
    {
        return $this->hasOne(Thuoctinh::className(), ['id_thuoctinh' => 'id_thuoctinh']);
    }
}
