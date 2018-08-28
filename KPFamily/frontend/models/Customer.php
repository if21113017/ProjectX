<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $nama
 * @property int $id_jenis
 *
 * @property BonPadi[] $bonPadis
 * @property BonProduk[] $bonProduks
 * @property JenisCustomer $jenis
 * @property HutangPadi[] $hutangPadis
 * @property HutangProduk[] $hutangProduks
 * @property PinjamanCustomer[] $pinjamanCustomers
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['id_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => JenisCustomer::className(), 'targetAttribute' => ['id_jenis' => 'id']],
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
            'id_jenis' => 'Id Jenis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBonPadis()
    {
        return $this->hasMany(BonPadi::className(), ['id_customer' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBonProduks()
    {
        return $this->hasMany(BonProduk::className(), ['id_customer' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenis()
    {
        return $this->hasOne(JenisCustomer::className(), ['id' => 'id_jenis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHutangPadis()
    {
        return $this->hasMany(HutangPadi::className(), ['id_customer' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHutangProduks()
    {
        return $this->hasMany(HutangProduk::className(), ['id_customer' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPinjamanCustomers()
    {
        return $this->hasMany(PinjamanCustomer::className(), ['id_customer' => 'id']);
    }
}
