<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItTcategory;

/**
 * ItTcategorySearch represents the model behind the search form about `app\models\ItTcategory`.
 */
class ItTcategorySearch extends ItTcategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cate_ID', 'ID_RQD', 'Age_LMT', 'cate_concess', 'Priority', 'Batched', 'Updated'], 'integer'],
            [['Cate_Name'], 'safe'],
            [['TAXPERC', 'TAXPERC2', 'TAXPERC3', 'TAXPERCCOST'], 'number'],
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
        $query = ItTcategory::find();

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
            'Cate_ID' => $this->Cate_ID,
            'TAXPERC' => $this->TAXPERC,
            'TAXPERC2' => $this->TAXPERC2,
            'TAXPERC3' => $this->TAXPERC3,
            'ID_RQD' => $this->ID_RQD,
            'Age_LMT' => $this->Age_LMT,
            'TAXPERCCOST' => $this->TAXPERCCOST,
            'cate_concess' => $this->cate_concess,
            'Priority' => $this->Priority,
            'Batched' => $this->Batched,
            'Updated' => $this->Updated,
        ]);

        $query->andFilterWhere(['like', 'Cate_Name', $this->Cate_Name]);

        return $dataProvider;
    }
}
