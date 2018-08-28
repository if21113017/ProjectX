<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pinjaman_karyawan".
 *
 * @property int $id
 * @property int $id_karyawan
 * @property int $jumlah_pinjam
 * @property string $keterangan
 * @property string $tanggal
 * @property int $id_user
 *
 * @property Karyawan $karyawan
 * @property User $user
 */
class PinjamanKaryawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pinjaman_karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_karyawan', 'jumlah_pinjam', 'id_user'], 'integer'],
            [['tanggal'], 'safe'],
            [['keterangan'], 'string', 'max' => 100],
            [['id_karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Karyawan::className(), 'targetAttribute' => ['id_karyawan' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_karyawan' => 'Id Karyawan',
            'jumlah_pinjam' => 'Jumlah Pinjam',
            'keterangan' => 'Keterangan',
            'tanggal' => 'Tanggal',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKaryawan()
    {
        return $this->hasOne(Karyawan::className(), ['id' => 'id_karyawan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
