<?php

namespace vendor\kouosl\talep2\models;

use Yii;

/**
 * This is the model class for table "taleps".
 *
 * @property integer $id
 * @property string $Izin Turu
 * @property integer $Gun Sayisi
 * @property string $Baslangic Tarihi
 * @property string $Bitis Tarihi
 * @property string $Aciklama
 * @property string $Adres
 */
class Taleps extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'taleps';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Izin Turu', 'Gun Sayisi', 'Baslangic Tarihi', 'Bitis Tarihi', 'Aciklama', 'Adres'], 'required'],
            [['id', 'Gun Sayisi'], 'integer'],
            [['Baslangic Tarihi', 'Bitis Tarihi'], 'safe'],
            [['Aciklama'], 'string'],
            [['Izin Turu', 'Adres'], 'string', 'max' => 22],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Izin Turu' => 'Izin  Turu',
            'Gun Sayisi' => 'Gun  Sayisi',
            'Baslangic Tarihi' => 'Baslangic  Tarihi',
            'Bitis Tarihi' => 'Bitis  Tarihi',
            'Aciklama' => 'Aciklama',
            'Adres' => 'Adres',
        ];
    }
}
