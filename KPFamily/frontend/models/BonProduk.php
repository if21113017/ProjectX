<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bon_produk".
 *
 * @property int $id
 * @property int $id_customer
 * @property string $total_harga
 * @property string $total_bayar
 * @property string $tanggal
 * @property string $keterangan
 * @property int $id_user
 *
 * @property Customer $customer
 * @property User $user
 * @property DeskripsiBonProduk[] $deskripsiBonProduks
 * @property HutangProduk[] $hutangProduks
 */
class BonProduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bon_produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_customer', 'total_harga', 'total_bayar', 'id_user'], 'integer'],
            [['tanggal'], 'safe'],
            [['keterangan'], 'string', 'max' => 100],
            [['id_customer'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['id_customer' => 'id']],
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
            'id_customer' => 'Id Customer',
            'total_harga' => 'Total Harga',
            'total_bayar' => 'Total Bayar',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'id_customer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeskripsiBonProduks()
    {
        return $this->hasMany(DeskripsiBonProduk::className(), ['id_bon_produk' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHutangProduks()
    {
        return $this->hasMany(HutangProduk::className(), ['id_bon_produk' => 'id']);
    }
}
