<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi_obat".
 *
 * @property int $id
 * @property string $tanggal
 * @property int $id_pasien
 * @property int $id_obat
 *
 * @property Obat $obat
 * @property Pasien $pasien
 */
class TransaksiObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tanggal', 'id_pasien', 'id_obat'], 'required'],
            [['id', 'id_pasien', 'id_obat'], 'integer'],
            [['tanggal'], 'safe'],
            [['id_obat'], 'exist', 'skipOnError' => true, 'targetClass' => Obat::class, 'targetAttribute' => ['id_obat' => 'id']],
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
            'id_obat' => 'Id Obat',
        ];
    }

    /**
     * Gets query for [[Obat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObat()
    {
        return $this->hasOne(Obat::class, ['id' => 'id_obat']);
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
