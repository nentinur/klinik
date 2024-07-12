<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id
 * @property string $nama
 * @property string $kontak
 * @property string $alamat
 *
 * @property DaftarPasien[] $daftarPasiens
 * @property TransaksiObat[] $transaksiObats
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'kontak', 'alamat'], 'required'],
            [['nama', 'alamat'], 'string', 'max' => 100],
            [['kontak'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'kontak' => 'Kontak',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[DaftarPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDaftarPasiens()
    {
        return $this->hasMany(DaftarPasien::class, ['id_pasien' => 'id']);
    }

    /**
     * Gets query for [[TransaksiObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiObats()
    {
        return $this->hasMany(TransaksiObat::class, ['id_pasien' => 'id']);
    }
}
