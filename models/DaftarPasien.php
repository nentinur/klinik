<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "daftar_pasien".
 *
 * @property int $id
 * @property string $tanggal
 * @property int $id_pasien
 * @property string $keluhan
 *
 * @property Pasien $pasien
 */
class DaftarPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'daftar_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_pasien', 'keluhan'], 'required'],
            [['tanggal'], 'safe'],
            [['id_pasien'], 'integer'],
            [['keluhan'], 'string', 'max' => 200],
            [['id_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['id_pasien' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal' => 'Tanggal',
            'id_pasien' => 'Id Pasien',
            'keluhan' => 'Keluhan',
        ];
    }

    /**
     * Gets query for [[Pasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasien()
    {
        return $this->hasOne(Pasien::class, ['id' => 'id_pasien']);
    }
}
