<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItTaccount;

/**
 * ItTaccountSearch represents the model behind the search form about `app\models\ItTaccount`.
 */
class ItTaccountSearch extends ItTaccount
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Acco_ID', 'Acco_Type_ID', 'Acco_Acty_ID', 'Acco_Stat', 'Batched', 'Updated'], 'integer'],
            [['Acco_Name', 'Acco_Desc', 'Acco_Nro', 'Acco_Date', 'Acco_Note', 'account_thirdparty'], 'safe'],
            [['Acco_Bala'], 'number'],
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
        $query = ItTaccount::find();

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
            'Acco_ID' => $this->Acco_ID,
            'Acco_Type_ID' => $this->Acco_Type_ID,
            'Acco_Acty_ID' => $this->Acco_Acty_ID,
            'Acco_Bala' => $this->Acco_Bala,
            'Acco_Date' => $this->Acco_Date,
            'Acco_Stat' => $this->Acco_Stat,
            'Batched' => $this->Batched,
            'Updated' => $this->Updated,
        ]);

        $query->andFilterWhere(['like', 'Acco_Name', $this->Acco_Name])
            ->andFilterWhere(['like', 'Acco_Desc', $this->Acco_Desc])
            ->andFilterWhere(['like', 'Acco_Nro', $this->Acco_Nro])
            ->andFilterWhere(['like', 'Acco_Note', $this->Acco_Note])
            ->andFilterWhere(['like', 'account_thirdparty', $this->account_thirdparty]);

        return $dataProvider;
    }
}
