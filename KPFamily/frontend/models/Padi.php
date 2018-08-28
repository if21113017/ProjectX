<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "padi".
 *
 * @property int $id
 * @property string $jenis_padi
 * @property string $stok
 *
 * @property DeskripsiBonPadi[] $deskripsiBonPadis
 */
class Padi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'padi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_padi', 'stok'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_padi' => 'Jenis Padi',
            'stok' => 'Stok',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeskripsiBonPadis()
    {
        return $this->hasMany(DeskripsiBonPadi::className(), ['id_jenis_padi' => 'id']);
    }
}
