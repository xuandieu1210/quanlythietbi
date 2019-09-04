<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lichsukiemke".
 *
 * @property int $id_lichsu
 * @property int $id_thietbi
 * @property int $id_dot
 * @property string $ghichu
 *
 * @property Dotkiemke $dot
 * @property Thietbi $thietbi
 */
class Lichsukiemke extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lichsukiemke';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_thietbi', 'id_dot', 'ghichu'], 'required'],
            [['id_thietbi', 'id_dot'], 'integer'],
            [['ghichu'], 'string', 'max' => 255],
            [['id_dot'], 'exist', 'skipOnError' => true, 'targetClass' => Dotkiemke::className(), 'targetAttribute' => ['id_dot' => 'id_dot']],
            [['id_thietbi'], 'exist', 'skipOnError' => true, 'targetClass' => Thietbi::className(), 'targetAttribute' => ['id_thietbi' => 'id_thietbi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_lichsu' => 'Id Lichsu',
            'id_thietbi' => 'Id Thietbi',
            'id_dot' => 'Id Dot',
            'ghichu' => 'Ghichu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDot()
    {
        return $this->hasOne(Dotkiemke::className(), ['id_dot' => 'id_dot']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThietbi()
    {
        return $this->hasOne(Thietbi::className(), ['id_thietbi' => 'id_thietbi']);
    }
}
