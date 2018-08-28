<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property int $id
 * @property string $nama
 * @property string $tanngal_masuk
 * @property string $tanggal_keluar
 * @property string $keterangan
 *
 * @property PinjamanKaryawan[] $pinjamanKaryawans
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanngal_masuk', 'tanggal_keluar'], 'safe'],
            [['nama'], 'string', 'max' => 50],
            [['keterangan'], 'string', 'max' => 100],
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
            'tanngal_masuk' => 'Tanngal Masuk',
            'tanggal_keluar' => 'Tanggal Keluar',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPinjamanKaryawans()
    {
        return $this->hasMany(PinjamanKaryawan::className(), ['id_karyawan' => 'id']);
    }
}
