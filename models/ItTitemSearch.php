<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItTitem;

/**
 * ItTitemSearch represents the model behind the search form about `app\models\ItTitem`.
 */
class ItTitemSearch extends ItTitem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ITEM_UID', 'ITEM_Prefer_ID', 'ITEM_Unit_ID', 'ITEM_Type_ID', 'ITEM_Class_ID', 'ITEM_Sub_Class_ID', 'ITEM_Fam_ID', 'ITEM_Sub_Fam_ID', 'ITEM_Cate_ID', 'ITEM_SubC_ID', 'ITEM_Depa_ID', 'ITEM_Account_ID', 'ITEM_Inco_Account_ID', 'ITEM_Vend_ID', 'Prioridad', 'ITEM_Show', 'ITEM_topping_ID', 'Kit_red_color', 'item_active', 'Part_Inventory', 'item_modi_id', 'Show_modi', 'SubITEM_Unit_ID', 'RentalYES', 'Exclude_From_Loyalty', 'ITEM_ShowOnBB', 'opt_num_seri', 'warr_months', 'Novar_costtax', 'Production_Item', 'Byportion_Item', 'Print_barcode', 'Stock_Room', 'Scr_arr_inv', 'invscr_noshow', 'Stock_WebChanged', 'ITEM_Show_Web', 'line_discount', 'open_item', 'Disc_item', 'Ticket_disc', 'item_game_duration', 'show_pic', 'Batched', 'Updated'], 'integer'],
            [['ITEM_ID', 'ITEM_Picture', 'ITEM_Description', 'ITEM_Det_Description', 'ITEM_Screen_Name', 'ITEM_kitchen_Name', 'ITEM_kitchen_Name2', 'Item_UM', 'ITEM_Ubic_Pass', 'ITEM_Ubic_Stant', 'ITEM_Ubic_Col', 'ITEM_Ubic_Row', 'ITEM_Vend_PN', 'ITEM_Invo_Message', 'Recipes', 'Created_date', 'Modify_date', 'Modify_by', 'Unit_Sub_Q', 'Num_Bonus_Points', 'EXP_Date', 'Last_Sold', 'AndroidSyncs', 'mod_online', 'ITEM_LOCAL_ID'], 'safe'],
            [['ITEM_Sale_Price', 'ITEM_Sale_Price2', 'ITEM_Sale_Price3', 'ITEM_Cost', 'ITEM_Reorder', 'Beg_Balance', 'in_stock', 'Reorder_Quantity', 'rent_fee', 'ISC_tax', 'item_tax1', 'item_tax2', 'item_tax3', 'Commiused', 'qtyspc', 'perish_price', 'Item_TARE'], 'number'],
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
        $query = ItTitem::find();

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
            'ITEM_UID' => $this->ITEM_UID,
            'ITEM_Prefer_ID' => $this->ITEM_Prefer_ID,
            'ITEM_Unit_ID' => $this->ITEM_Unit_ID,
            'ITEM_Type_ID' => $this->ITEM_Type_ID,
            'ITEM_Class_ID' => $this->ITEM_Class_ID,
            'ITEM_Sub_Class_ID' => $this->ITEM_Sub_Class_ID,
            'ITEM_Fam_ID' => $this->ITEM_Fam_ID,
            'ITEM_Sub_Fam_ID' => $this->ITEM_Sub_Fam_ID,
            'ITEM_Cate_ID' => $this->ITEM_Cate_ID,
            'ITEM_SubC_ID' => $this->ITEM_SubC_ID,
            'ITEM_Depa_ID' => $this->ITEM_Depa_ID,
            'ITEM_Sale_Price' => $this->ITEM_Sale_Price,
            'ITEM_Sale_Price2' => $this->ITEM_Sale_Price2,
            'ITEM_Sale_Price3' => $this->ITEM_Sale_Price3,
            'ITEM_Cost' => $this->ITEM_Cost,
            'ITEM_Account_ID' => $this->ITEM_Account_ID,
            'ITEM_Inco_Account_ID' => $this->ITEM_Inco_Account_ID,
            'ITEM_Vend_ID' => $this->ITEM_Vend_ID,
            'ITEM_Reorder' => $this->ITEM_Reorder,
            'Prioridad' => $this->Prioridad,
            'ITEM_Show' => $this->ITEM_Show,
            'ITEM_topping_ID' => $this->ITEM_topping_ID,
            'Kit_red_color' => $this->Kit_red_color,
            'item_active' => $this->item_active,
            'Part_Inventory' => $this->Part_Inventory,
            'item_modi_id' => $this->item_modi_id,
            'Beg_Balance' => $this->Beg_Balance,
            'Show_modi' => $this->Show_modi,
            'Created_date' => $this->Created_date,
            'Modify_date' => $this->Modify_date,
            'SubITEM_Unit_ID' => $this->SubITEM_Unit_ID,
            'in_stock' => $this->in_stock,
            'Reorder_Quantity' => $this->Reorder_Quantity,
            'RentalYES' => $this->RentalYES,
            'rent_fee' => $this->rent_fee,
            'EXP_Date' => $this->EXP_Date,
            'Last_Sold' => $this->Last_Sold,
            'Exclude_From_Loyalty' => $this->Exclude_From_Loyalty,
            'ITEM_ShowOnBB' => $this->ITEM_ShowOnBB,
            'opt_num_seri' => $this->opt_num_seri,
            'warr_months' => $this->warr_months,
            'ISC_tax' => $this->ISC_tax,
            'Novar_costtax' => $this->Novar_costtax,
            'Production_Item' => $this->Production_Item,
            'Byportion_Item' => $this->Byportion_Item,
            'Print_barcode' => $this->Print_barcode,
            'Stock_Room' => $this->Stock_Room,
            'item_tax1' => $this->item_tax1,
            'item_tax2' => $this->item_tax2,
            'item_tax3' => $this->item_tax3,
            'Scr_arr_inv' => $this->Scr_arr_inv,
            'invscr_noshow' => $this->invscr_noshow,
            'Commiused' => $this->Commiused,
            'qtyspc' => $this->qtyspc,
            'Stock_WebChanged' => $this->Stock_WebChanged,
            'ITEM_Show_Web' => $this->ITEM_Show_Web,
            'line_discount' => $this->line_discount,
            'open_item' => $this->open_item,
            'Disc_item' => $this->Disc_item,
            'mod_online' => $this->mod_online,
            'Ticket_disc' => $this->Ticket_disc,
            'perish_price' => $this->perish_price,
            'item_game_duration' => $this->item_game_duration,
            'Item_TARE' => $this->Item_TARE,
            'show_pic' => $this->show_pic,
            'Batched' => $this->Batched,
            'Updated' => $this->Updated,
        ]);

        $query->andFilterWhere(['like', 'ITEM_ID', $this->ITEM_ID])
            ->andFilterWhere(['like', 'ITEM_Picture', $this->ITEM_Picture])
            ->andFilterWhere(['like', 'ITEM_Description', $this->ITEM_Description])
            ->andFilterWhere(['like', 'ITEM_Det_Description', $this->ITEM_Det_Description])
            ->andFilterWhere(['like', 'ITEM_Screen_Name', $this->ITEM_Screen_Name])
            ->andFilterWhere(['like', 'ITEM_kitchen_Name', $this->ITEM_kitchen_Name])
            ->andFilterWhere(['like', 'ITEM_kitchen_Name2', $this->ITEM_kitchen_Name2])
            ->andFilterWhere(['like', 'Item_UM', $this->Item_UM])
            ->andFilterWhere(['like', 'ITEM_Ubic_Pass', $this->ITEM_Ubic_Pass])
            ->andFilterWhere(['like', 'ITEM_Ubic_Stant', $this->ITEM_Ubic_Stant])
            ->andFilterWhere(['like', 'ITEM_Ubic_Col', $this->ITEM_Ubic_Col])
            ->andFilterWhere(['like', 'ITEM_Ubic_Row', $this->ITEM_Ubic_Row])
            ->andFilterWhere(['like', 'ITEM_Vend_PN', $this->ITEM_Vend_PN])
            ->andFilterWhere(['like', 'ITEM_Invo_Message', $this->ITEM_Invo_Message])
            ->andFilterWhere(['like', 'Recipes', $this->Recipes])
            ->andFilterWhere(['like', 'Modify_by', $this->Modify_by])
            ->andFilterWhere(['like', 'Unit_Sub_Q', $this->Unit_Sub_Q])
            ->andFilterWhere(['like', 'Num_Bonus_Points', $this->Num_Bonus_Points])
            ->andFilterWhere(['like', 'AndroidSyncs', $this->AndroidSyncs])
            ->andFilterWhere(['like', 'ITEM_LOCAL_ID', $this->ITEM_LOCAL_ID]);

        return $dataProvider;
    }
}
