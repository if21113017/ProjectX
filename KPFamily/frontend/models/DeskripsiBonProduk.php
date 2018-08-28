<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "deskripsi_bon_produk".
 *
 * @property int $id
 * @property int $id_bon_produk
 * @property int $id_produk
 * @property string $jumlah_satuan
 * @property string $harga_satuan
 * @property string $satuan
 * @property string $total_harga
 * @property string $keterangan
 *
 * @property BonProduk $bonProduk
 * @property HutangProduk $produk
 */
class DeskripsiBonProduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deskripsi_bon_produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bon_produk', 'id_produk', 'jumlah_satuan', 'harga_satuan', 'total_harga'], 'integer'],
            [['satuan'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 100],
            [['id_bon_produk'], 'exist', 'skipOnError' => true, 'targetClass' => BonProduk::className(), 'targetAttribute' => ['id_bon_produk' => 'id']],
            [['id_produk'], 'exist', 'skipOnError' => true, 'targetClass' => HutangProduk::className(), 'targetAttribute' => ['id_produk' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_bon_produk' => 'Id Bon Produk',
            'id_produk' => 'Id Produk',
            'jumlah_satuan' => 'Jumlah Satuan',
            'harga_satuan' => 'Harga Satuan',
            'satuan' => 'Satuan',
            'total_harga' => 'Total Harga',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBonProduk()
    {
        return $this->hasOne(BonProduk::className(), ['id' => 'id_bon_produk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduk()
    {
        return $this->hasOne(HutangProduk::className(), ['id' => 'id_produk']);
    }
}
