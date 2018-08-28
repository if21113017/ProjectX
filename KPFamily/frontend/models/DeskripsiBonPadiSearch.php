<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DeskripsiBonPadi;

/**
 * DeskripsiBonPadiSearch represents the model behind the search form of `frontend\models\DeskripsiBonPadi`.
 */
class DeskripsiBonPadiSearch extends DeskripsiBonPadi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_bon', 'id_jenis_padi', 'jumlah_karung', 'berat', 'total_berat', 'harga_perkilo', 'jumlah_harga'], 'integer'],
            [['keterangan'], 'safe'],
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
        $query = DeskripsiBonPadi::find();

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
            'id_bon' => $this->id_bon,
            'id_jenis_padi' => $this->id_jenis_padi,
            'jumlah_karung' => $this->jumlah_karung,
            'berat' => $this->berat,
            'total_berat' => $this->total_berat,
            'harga_perkilo' => $this->harga_perkilo,
            'jumlah_harga' => $this->jumlah_harga,
        ]);

        $query->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
