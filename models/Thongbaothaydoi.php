<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thongbaothaydoi".
 *
 * @property int $id_thongbao
 * @property int $id_thietbi
 * @property int $id_tramnguon
 * @property int $id_tramdich
 * @property string $noidung
 * @property int $created_at
 *
 * @property Thietbi $thietbi
 * @property Tram $tramdich
 * @property Tram $tramnguon
 */
class Thongbaothaydoi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thongbaothaydoi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_thietbi', 'noidung', 'created_at'], 'required'],
            [['id_thietbi', 'id_tramnguon', 'id_tramdich', 'created_at'], 'integer'],
            [['noidung'], 'string', 'max' => 255],
            [['id_thietbi'], 'exist', 'skipOnError' => true, 'targetClass' => Thietbi::className(), 'targetAttribute' => ['id_thietbi' => 'id_thietbi']],
            [['id_tramdich'], 'exist', 'skipOnError' => true, 'targetClass' => Tram::className(), 'targetAttribute' => ['id_tramdich' => 'id_tram']],
            [['id_tramnguon'], 'exist', 'skipOnError' => true, 'targetClass' => Tram::className(), 'targetAttribute' => ['id_tramnguon' => 'id_tram']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_thongbao' => 'Id Thongbao',
            'id_thietbi' => 'Id Thietbi',
            'id_tramnguon' => 'Id Tramnguon',
            'id_tramdich' => 'Id Tramdich',
            'noidung' => 'Noidung',
            'created_at' => 'Created At',
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
    public function getTramdich()
    {
        return $this->hasOne(Tram::className(), ['id_tram' => 'id_tramdich']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTramnguon()
    {
        return $this->hasOne(Tram::className(), ['id_tram' => 'id_tramnguon']);
    }
}
