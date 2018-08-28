<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PinjamanKaryawan;

/**
 * PinjamanKaryawanSearch represents the model behind the search form of `frontend\models\PinjamanKaryawan`.
 */
class PinjamanKaryawanSearch extends PinjamanKaryawan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_karyawan', 'jumlah_pinjam', 'id_user'], 'integer'],
            [['keterangan', 'tanggal'], 'safe'],
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
        $query = PinjamanKaryawan::find();

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
            'id_karyawan' => $this->id_karyawan,
            'jumlah_pinjam' => $this->jumlah_pinjam,
            'tanggal' => $this->tanggal,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
