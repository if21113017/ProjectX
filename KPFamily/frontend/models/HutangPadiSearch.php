<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HutangPadi;

/**
 * HutangPadiSearch represents the model behind the search form of `frontend\models\HutangPadi`.
 */
class HutangPadiSearch extends HutangPadi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_bon_padi', 'id_customer', 'jumlah_hutang'], 'integer'],
            [['tanggal'], 'safe'],
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
        $query = HutangPadi::find();

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
            'id_bon_padi' => $this->id_bon_padi,
            'id_customer' => $this->id_customer,
            'jumlah_hutang' => $this->jumlah_hutang,
            'tanggal' => $this->tanggal,
        ]);

        return $dataProvider;
    }
}
