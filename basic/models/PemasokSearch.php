<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pemasok;

/**
 * PemasokSearch represents the model behind the search form of `app\models\Pemasok`.
 */
class PemasokSearch extends Pemasok
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pemasok', 'nama_pemasok', 'asal_pemasok'], 'safe'],
            [['tlp_pemasok'], 'integer'],
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
        $query = Pemasok::find();

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
            'tlp_pemasok' => $this->tlp_pemasok,
        ]);

        $query->andFilterWhere(['like', 'id_pemasok', $this->id_pemasok])
            ->andFilterWhere(['like', 'nama_pemasok', $this->nama_pemasok])
            ->andFilterWhere(['like', 'asal_pemasok', $this->asal_pemasok]);

        return $dataProvider;
    }
}
