<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "deskripsi_bon_padi".
 *
 * @property int $id
 * @property int $id_bon
 * @property int $id_jenis_padi
 * @property int $jumlah_karung
 * @property string $berat
 * @property string $total_berat
 * @property string $harga_perkilo
 * @property string $jumlah_harga
 * @property string $keterangan
 *
 * @property BonPadi $bon
 * @property Padi $jenisPadi
 */
class DeskripsiBonPadi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deskripsi_bon_padi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bon', 'id_jenis_padi', 'jumlah_karung', 'berat', 'total_berat', 'harga_perkilo', 'jumlah_harga'], 'integer'],
            [['keterangan'], 'string', 'max' => 100],
            [['id_bon'], 'exist', 'skipOnError' => true, 'targetClass' => BonPadi::className(), 'targetAttribute' => ['id_bon' => 'id']],
            [['id_jenis_padi'], 'exist', 'skipOnError' => true, 'targetClass' => Padi::className(), 'targetAttribute' => ['id_jenis_padi' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_bon' => 'Id Bon',
            'id_jenis_padi' => 'Id Jenis Padi',
            'jumlah_karung' => 'Jumlah Karung',
            'berat' => 'Berat',
            'total_berat' => 'Total Berat',
            'harga_perkilo' => 'Harga Perkilo',
            'jumlah_harga' => 'Jumlah Harga',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBon()
    {
        return $this->hasOne(BonPadi::className(), ['id' => 'id_bon']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisPadi()
    {
        return $this->hasOne(Padi::className(), ['id' => 'id_jenis_padi']);
    }
}
