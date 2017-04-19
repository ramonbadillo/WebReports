<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\SqlDataProvider;
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
      
      public function getReportByCategory($startDate,$endDate){
            
            
            $dataProvider = new SqlDataProvider([
                  //'sql' => 'SELECT * FROM it_tcategory',
                  'sql' => 'SELECT SUM(it_tdetamove.Move_Deta_Q) AS contadito,it_tcategory.Cate_Name, '.
                  'SUM(it_tdetamove.Move_Deta_Tax_Value+it_tdetamove.Move_Deta_Tax2_Value+it_tdetamove.Move_Deta_Tax3_Value) AS grandtotaltax, '.
                  'SUM(it_tdetamove.Move_Deta_Tax_Value) AS totaltax, '.
                  'SUM(it_tdetamove.Move_Deta_Tax2_Value) AS totaltax2, '.
                  'SUM(it_tdetamove.Move_Deta_Tax3_Value) AS totaltax3, '.
                  'SUM(it_tdetamove.Move_Deta_Q*it_tdetamove.Move_Deta_price)- '.
                  'SUM(it_tdetamove.Move_Deta_Tax_Value+it_tdetamove.Move_Deta_Tax2_Value+it_tdetamove.Move_Deta_Tax3_Value) AS subtotal, '.
                  'SUM(it_tdetamove.Move_Deta_Q*it_tdetamove.Move_Deta_price) AS grantotal '.
                  'FROM it_tmove '.
                  'INNER JOIN ((it_tcategory '.
                  'INNER JOIN it_titem ON it_tcategory.Cate_ID = it_titem.ITEM_Cate_ID) INNER JOIN it_tdetamove '.
                  'ON it_titem.ITEM_ID = it_tdetamove.Move_Deta_ITEM_ID) ON it_tmove.Move_ID = it_tdetamove.Move_Deta_Move_ID '.
                  'WHERE it_tmove.Move_Date BETWEEN \''.$startDate.'\' AND \''.$endDate.' \' '.
                  'AND it_tmove.Move_Oper_ID = 2 AND it_titem.ITEM_Inco_Account_ID=1  AND it_tdetamove.Move_Deta_price<>0 '.
                  'GROUP BY it_tcategory.Cate_Name ',
                  
                  
                  'pagination' => [
                        'pageSize' => 20,
                  ],
                  'totalCount' => 5,
                  'sort' => [
                        'attributes' => [
                              
                              'Priority' => [
                                    'asc' => ['Priority' => SORT_ASC],
                                    'desc' => ['Priority' => SORT_DESC],
                                    'default' => SORT_DESC,
                                    'label' => 'Priority',
                              ],
                        ],
                  ],
            ]);
            
            return $dataProvider;
            
      }
}
/*
brian query
'sql' => 'select it_titem.ITEM_ID, it_titem.ITEM_Sale_Price, it_titem.ITEM_Cost, it_tuser.USER_Login, it_tcategory.TAXPERC, '.
' it_titem.ITEM_Description, '.
'(it_tdetamove.Move_Deta_K * it_tdetamove.Move_Deta_Q / it_tdetamove.Move_Deta_Q) AS UCOST,'.
'(it_tdetamove.Move_Deta_price * it_tdetamove.Move_Deta_Q / it_tdetamove.Move_Deta_Q) AS Pprice, '.

' it_tdetamove.Move_Deta_Q AS Q, it_tdetamove.Move_Deta_Tax_Value AS TX1, it_tdetamove.Move_Deta_Tax2_Value AS TX2, '.
' it_tdetamove.Move_Deta_Tax3_Value AS TX3, (it_tdetamove.Move_Deta_Tax_Value + it_tdetamove.Move_Deta_Tax2_Value + it_tdetamove.Move_Deta_Tax3_Value) AS Tx, '.
' it_tdetamove.Move_Deta_K, it_tdetamove.Move_Deta_price, it_tcategory.Cate_id, it_tcategory.Cate_Name AS quantity  '.
'FROM it_tdetamove ' .

'INNER JOIN it_titem ON (it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID) '.
'INNER JOIN it_taccount ON (it_taccount.Acco_ID = it_titem.ITEM_Inco_Account_ID) '.
'INNER JOIN it_taccotype ON (it_taccotype.AcTy_ID = it_taccount.Acco_Type_ID) '.
'INNER JOIN it_tmove ON (it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID) '.
'INNER JOIN it_tcategory ON (it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID) '.
'INNER JOIN it_taccotypegeneral ON (it_taccotype.Acco_GEN_ID = it_taccotypegeneral.Gen_account) '.
'LEFT JOIN it_tuser ON (it_tdetamove.order_host = it_tuser.USER_ID) '.
'WHERE it_titem.ITEM_Inco_Account_ID = 1 '.
'AND it_tmove.Move_Oper_ID = 2 '.
'AND it_tdetamove.Move_Deta_price <> 0 '.
'AND it_taccotypegeneral.Gen_account = 2 '.
'AND it_tmove.Move_Date BETWEEN \''.$startDate.'\' AND \''.$endDate.' \'',


*/
