<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Stok;

/**
 * StokSearch represents the model behind the search form of `app\models\Stok`.
 */
class StokSearch extends Stok
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_stok', 'id_pemasok', 'id_karyawan', 'tgl_kirim'], 'safe'],
            [['id_produk', 'jumlah_produk_masuk'], 'integer'],
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
        $query = Stok::find();

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
            'id_produk' => $this->id_produk,
            'tgl_kirim' => $this->tgl_kirim,
            'jumlah_produk_masuk' => $this->jumlah_produk_masuk,
        ]);

        $query->andFilterWhere(['like', 'id_stok', $this->id_stok])
            ->andFilterWhere(['like', 'id_pemasok', $this->id_pemasok])
            ->andFilterWhere(['like', 'id_karyawan', $this->id_karyawan]);

        return $dataProvider;
    }
}
