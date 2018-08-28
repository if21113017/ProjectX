<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DeskripsiBonProduk;

/**
 * DeskripsiBonProdukSearch represents the model behind the search form of `frontend\models\DeskripsiBonProduk`.
 */
class DeskripsiBonProdukSearch extends DeskripsiBonProduk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_bon_produk', 'id_produk', 'jumlah_satuan', 'harga_satuan', 'total_harga'], 'integer'],
            [['satuan', 'keterangan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DeskripsiBonProduk::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_bon_produk' => $this->id_bon_produk,
            'id_produk' => $this->id_produk,
            'jumlah_satuan' => $this->jumlah_satuan,
            'harga_satuan' => $this->harga_satuan,
            'total_harga' => $this->total_harga,
        ]);

        $query->andFilterWhere(['like', 'satuan', $this->satuan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
