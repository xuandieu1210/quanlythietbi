<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "donvi".
 *
 * @property int $id_donvi
 * @property string $ten_donvi
 * @property string $diachi
 * @property int $cap
 * @property int $captren
 *
 * @property Profile[] $profiles
 * @property Tram[] $trams
 */
class Donvi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'donvi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten_donvi', 'diachi', 'cap', 'captren'], 'required'],
            [['cap', 'captren'], 'integer'],
            [['ten_donvi', 'diachi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_donvi' => 'Id Donvi',
            'ten_donvi' => 'Ten Donvi',
            'diachi' => 'Diachi',
            'cap' => 'Cap',
            'captren' => 'Captren',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profile::className(), ['id_donvi' => 'id_donvi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrams()
    {
        return $this->hasMany(Tram::className(), ['id_donvi' => 'id_donvi']);
    }
}
