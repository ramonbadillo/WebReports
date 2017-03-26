<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItTdetamove;

/**
 * ItTdetamoveSearch represents the model behind the search form about `app\models\ItTdetamove`.
 */
class ItTdetamoveSearch extends ItTdetamove
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Move_Deta_ID', 'Move_Deta_Move_ID', 'Subitem_of', 'detamove_incl_tax', 'sold_mode', 'Note', 'On_Sale', 'Item_complete', 'Order_ID', 'order_host', 'man_apprid', 'rentaldays', 'rental', 'Stock_Room', 'modi', 'Inv_Close_ID', 'Move_Deta_Guia_ID', 'Commipaid_id', 'sent_to', 'gift_id', 'Vendor_id', 'origi_cuentaID', 'Batched', 'Updated'], 'integer'],
            [['Move_Deta_ITEM_ID', 'Move_deta_UM', 'Detalles', 'Date_complete', 'Order_Table_name', 'Chair_ID', 'Serial_Num', 'expi_date', 'ITEMS_Picture', 'Returned_id', 'Discount_Code', 'Order_Regi_name', 'Order_Time_in', 'Order_Item_PREFERENCE', 'Date_Rented'], 'safe'],
            [['Move_Deta_Q', 'Move_Deta_K', 'Move_Deta_price', 'Move_Deta_Tax_Value', 'Move_Deta_Tax2_Value', 'Move_Deta_Tax3_Value', 'Move_REG_price', 'Commicost', 'Move_Deta_Ori_Q'], 'number'],
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
        $query = ItTdetamove::find();

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
            'Move_Deta_ID' => $this->Move_Deta_ID,
            'Move_Deta_Move_ID' => $this->Move_Deta_Move_ID,
            'Subitem_of' => $this->Subitem_of,
            'Move_Deta_Q' => $this->Move_Deta_Q,
            'Move_Deta_K' => $this->Move_Deta_K,
            'Move_Deta_price' => $this->Move_Deta_price,
            'Move_Deta_Tax_Value' => $this->Move_Deta_Tax_Value,
            'Move_Deta_Tax2_Value' => $this->Move_Deta_Tax2_Value,
            'Move_Deta_Tax3_Value' => $this->Move_Deta_Tax3_Value,
            'Move_REG_price' => $this->Move_REG_price,
            'detamove_incl_tax' => $this->detamove_incl_tax,
            'sold_mode' => $this->sold_mode,
            'Note' => $this->Note,
            'On_Sale' => $this->On_Sale,
            'Item_complete' => $this->Item_complete,
            'Date_complete' => $this->Date_complete,
            'Order_ID' => $this->Order_ID,
            'order_host' => $this->order_host,
            'man_apprid' => $this->man_apprid,
            'expi_date' => $this->expi_date,
            'rentaldays' => $this->rentaldays,
            'rental' => $this->rental,
            'Stock_Room' => $this->Stock_Room,
            'modi' => $this->modi,
            'Inv_Close_ID' => $this->Inv_Close_ID,
            'Move_Deta_Guia_ID' => $this->Move_Deta_Guia_ID,
            'Commicost' => $this->Commicost,
            'Commipaid_id' => $this->Commipaid_id,
            'sent_to' => $this->sent_to,
            'gift_id' => $this->gift_id,
            'Vendor_id' => $this->Vendor_id,
            'origi_cuentaID' => $this->origi_cuentaID,
            'Order_Time_in' => $this->Order_Time_in,
            'Date_Rented' => $this->Date_Rented,
            'Move_Deta_Ori_Q' => $this->Move_Deta_Ori_Q,
            'Batched' => $this->Batched,
            'Updated' => $this->Updated,
        ]);

        $query->andFilterWhere(['like', 'Move_Deta_ITEM_ID', $this->Move_Deta_ITEM_ID])
            ->andFilterWhere(['like', 'Move_deta_UM', $this->Move_deta_UM])
            ->andFilterWhere(['like', 'Detalles', $this->Detalles])
            ->andFilterWhere(['like', 'Order_Table_name', $this->Order_Table_name])
            ->andFilterWhere(['like', 'Chair_ID', $this->Chair_ID])
            ->andFilterWhere(['like', 'Serial_Num', $this->Serial_Num])
            ->andFilterWhere(['like', 'ITEMS_Picture', $this->ITEMS_Picture])
            ->andFilterWhere(['like', 'Returned_id', $this->Returned_id])
            ->andFilterWhere(['like', 'Discount_Code', $this->Discount_Code])
            ->andFilterWhere(['like', 'Order_Regi_name', $this->Order_Regi_name])
            ->andFilterWhere(['like', 'Order_Item_PREFERENCE', $this->Order_Item_PREFERENCE]);

        return $dataProvider;
    }
}
