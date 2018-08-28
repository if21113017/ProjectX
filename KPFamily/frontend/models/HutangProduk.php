<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hutang_produk".
 *
 * @property int $id
 * @property int $id_bon_produk
 * @property int $id_customer
 * @property string $banyak_hutang
 * @property string $tanggal
 * @property string $keterangan
 *
 * @property DeskripsiBonProduk[] $deskripsiBonProduks
 * @property BonProduk $bonProduk
 * @property Customer $customer
 */
class HutangProduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hutang_produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bon_produk', 'id_customer', 'banyak_hutang'], 'integer'],
            [['tanggal'], 'safe'],
            [['keterangan'], 'string', 'max' => 100],
            [['id_bon_produk'], 'exist', 'skipOnError' => true, 'targetClass' => BonProduk::className(), 'targetAttribute' => ['id_bon_produk' => 'id']],
            [['id_customer'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['id_customer' => 'id']],
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
            'id_customer' => 'Id Customer',
            'banyak_hutang' => 'Banyak Hutang',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeskripsiBonProduks()
    {
        return $this->hasMany(DeskripsiBonProduk::className(), ['id_produk' => 'id']);
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
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'id_customer']);
    }
}
