<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id_user
 * @property string $ten
 * @property int $id_donvi
 * @property string $dienthoai
 *
 * @property Donvi $donvi
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'ten', 'id_donvi', 'dienthoai'], 'required'],
            [['id_user', 'id_donvi'], 'integer'],
            [['ten', 'dienthoai'], 'string', 'max' => 255],
            [['id_user'], 'unique'],
            [['id_donvi'], 'exist', 'skipOnError' => true, 'targetClass' => Donvi::className(), 'targetAttribute' => ['id_donvi' => 'id_donvi']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'ten' => 'Ten',
            'id_donvi' => 'Id Donvi',
            'dienthoai' => 'Dienthoai',
        ];
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
