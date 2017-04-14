<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItTaccotype;

/**
 * ItTaccotypeSearch represents the model behind the search form about `app\models\ItTaccotype`.
 */
class ItTaccotypeSearch extends ItTaccotype
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AcTy_ID', 'Acco_GEN_ID', 'Batched', 'Updated'], 'integer'],
            [['AcTy_Name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = ItTaccotype::find();

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
            'AcTy_ID' => $this->AcTy_ID,
            'Acco_GEN_ID' => $this->Acco_GEN_ID,
            'Batched' => $this->Batched,
            'Updated' => $this->Updated,
        ]);

        $query->andFilterWhere(['like', 'AcTy_Name', $this->AcTy_Name]);

        return $dataProvider;
    }
}
