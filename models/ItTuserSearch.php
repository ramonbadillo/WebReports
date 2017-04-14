<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItTuser;

/**
 * ItTuserSearch represents the model behind the search form about `app\models\ItTuser`.
 */
class ItTuserSearch extends ItTuser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['USER_ID', 'USER_Roll_ID', 'USER_Cust_ID', 'USER_Loca_ID', 'USER_Empl_ID', 'UserON', 'EMPL_ID', 'grouping_id', 'Batched', 'Updated'], 'integer'],
            [['USER_Login', 'USER_Pass', 'USER_Pass_alt', 'USER_Date', 'USER_Expr_Date', 'Regi_Code'], 'safe'],
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
        $query = ItTuser::find();

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
            'USER_ID' => $this->USER_ID,
            'USER_Date' => $this->USER_Date,
            'USER_Expr_Date' => $this->USER_Expr_Date,
            'USER_Roll_ID' => $this->USER_Roll_ID,
            'USER_Cust_ID' => $this->USER_Cust_ID,
            'USER_Loca_ID' => $this->USER_Loca_ID,
            'USER_Empl_ID' => $this->USER_Empl_ID,
            'UserON' => $this->UserON,
            'EMPL_ID' => $this->EMPL_ID,
            'grouping_id' => $this->grouping_id,
            'Batched' => $this->Batched,
            'Updated' => $this->Updated,
        ]);

        $query->andFilterWhere(['like', 'USER_Login', $this->USER_Login])
            ->andFilterWhere(['like', 'USER_Pass', $this->USER_Pass])
            ->andFilterWhere(['like', 'USER_Pass_alt', $this->USER_Pass_alt])
            ->andFilterWhere(['like', 'Regi_Code', $this->Regi_Code]);

        return $dataProvider;
    }
}
