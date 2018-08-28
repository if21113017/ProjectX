<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bon_padi".
 *
 * @property int $id
 * @property int $id_customer
 * @property string $total_harga
 * @property string $total_bayar
 * @property string $tanggal
 * @property int $id_user
 *
 * @property Customer $customer
 * @property User $user
 * @property DeskripsiBonPadi[] $deskripsiBonPadis
 * @property HutangPadi[] $hutangPadis
 */
class BonPadi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bon_padi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_customer', 'total_harga', 'total_bayar', 'id_user'], 'integer'],
            [['tanggal'], 'safe'],
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
    public function getDeskripsiBonPadis()
    {
        return $this->hasMany(DeskripsiBonPadi::className(), ['id_bon' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHutangPadis()
    {
        return $this->hasMany(HutangPadi::className(), ['id_bon_padi' => 'id']);
    }
}
