<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hutang_padi".
 *
 * @property int $id
 * @property int $id_bon_padi
 * @property int $id_customer
 * @property string $jumlah_hutang
 * @property string $tanggal
 *
 * @property BonPadi $bonPadi
 * @property Customer $customer
 */
class HutangPadi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hutang_padi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bon_padi', 'id_customer', 'jumlah_hutang'], 'integer'],
            [['tanggal'], 'safe'],
            [['id_bon_padi'], 'exist', 'skipOnError' => true, 'targetClass' => BonPadi::className(), 'targetAttribute' => ['id_bon_padi' => 'id']],
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
            'id_bon_padi' => 'Id Bon Padi',
            'id_customer' => 'Id Customer',
            'jumlah_hutang' => 'Jumlah Hutang',
            'tanggal' => 'Tanggal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBonPadi()
    {
        return $this->hasOne(BonPadi::className(), ['id' => 'id_bon_padi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'id_customer']);
    }
}
