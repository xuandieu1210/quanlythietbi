<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dotkiemke".
 *
 * @property int $id_dot
 * @property string $ten_dot
 * @property int $id_tram
 * @property int $created_at
 * @property int $created_by
 *
 * @property Tram $tram
 * @property User $createdBy
 * @property Lichsukiemke[] $lichsukiemkes
 */
class Dotkiemke extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dotkiemke';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten_dot', 'id_tram', 'created_at', 'created_by'], 'required'],
            [['id_tram', 'created_at', 'created_by'], 'integer'],
            [['ten_dot'], 'string', 'max' => 255],
            [['id_tram'], 'exist', 'skipOnError' => true, 'targetClass' => Tram::className(), 'targetAttribute' => ['id_tram' => 'id_tram']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dot' => 'Id Dot',
            'ten_dot' => 'Ten Dot',
            'id_tram' => 'Id Tram',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
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
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLichsukiemkes()
    {
        return $this->hasMany(Lichsukiemke::className(), ['id_dot' => 'id_dot']);
    }
}
