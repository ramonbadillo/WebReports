<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItTmove;

/**
 * ItTmoveSearch represents the model behind the search form about `app\models\ItTmove`.
 */
class ItTmoveSearch extends ItTmove
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Move_ID', 'Move_Cust_ID', 'Move_Oper_ID', 'Move_Completed', 'Move_host', 'Move_cashier', 'Tax_Exempt', 'Move_preClose_ID', 'Move_Close', 'Move_Close_ID', 'Dine_type', 'Cust_Id', 'recipient_id', 'add_id', 'Billadd_id', 'MOD_empl', 'Driver', 'move_people', 'ticket_id', 'Payment_id', 'Pay_inFull', 'cc_name_id', 'Docu_type_ID', 'Salestype_id', 'EZway_order', 'Salesper_id', 'pago_id', 'sunat_sent', 'group_id', 'e_approved', 'Batched', 'Updated'], 'integer'],
            [['Ticket_count', 'Move_Date', 'Move_Due_Date', 'Move_Fiscal_Date', 'Driver_time_out', 'Driver_Delivered_Time', 'Move_Order_Created', 'Move_msg', 'Move_Regi_name', 'Move_User_Login', 'Cuenta_Name', 'Move_refer', 'Table_name', 'MOD_Date', 'ITEMS_Picture', 'note_credit', 'packlist_id', 'e_id', 'Customer_Picture', 'e_filename', 'e_document', 'e_documentdet', 'e_signature'], 'safe'],
            [['Move_Credit_Value', 'Move_Cash_Value', 'Move_Debit_Value', 'Move_Check_Value', 'Move_Stamp_Value', 'Move_wic_Value', 'Money_Conv', 'Move_Gift_Value', 'move_onaccount_Value', 'Move_CRNOTE_Value', 'move_tip_Value', 'grat_cc_tip', 'move_Delivery_Value', 'Move_amount_Tender', 'Credit_tip', 'Onaccount_tip'], 'number'],
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
        $query = ItTmove::find();

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
            'Move_ID' => $this->Move_ID,
            'Move_Cust_ID' => $this->Move_Cust_ID,
            'Move_Oper_ID' => $this->Move_Oper_ID,
            'Move_Date' => $this->Move_Date,
            'Move_Due_Date' => $this->Move_Due_Date,
            'Move_Fiscal_Date' => $this->Move_Fiscal_Date,
            'Driver_time_out' => $this->Driver_time_out,
            'Driver_Delivered_Time' => $this->Driver_Delivered_Time,
            'Move_Order_Created' => $this->Move_Order_Created,
            'Move_Completed' => $this->Move_Completed,
            'Move_host' => $this->Move_host,
            'Move_Credit_Value' => $this->Move_Credit_Value,
            'Move_Cash_Value' => $this->Move_Cash_Value,
            'Move_Debit_Value' => $this->Move_Debit_Value,
            'Move_Check_Value' => $this->Move_Check_Value,
            'Move_Stamp_Value' => $this->Move_Stamp_Value,
            'Move_wic_Value' => $this->Move_wic_Value,
            'Money_Conv' => $this->Money_Conv,
            'Move_Gift_Value' => $this->Move_Gift_Value,
            'move_onaccount_Value' => $this->move_onaccount_Value,
            'Move_CRNOTE_Value' => $this->Move_CRNOTE_Value,
            'move_tip_Value' => $this->move_tip_Value,
            'grat_cc_tip' => $this->grat_cc_tip,
            'move_Delivery_Value' => $this->move_Delivery_Value,
            'Move_amount_Tender' => $this->Move_amount_Tender,
            'Credit_tip' => $this->Credit_tip,
            'Move_cashier' => $this->Move_cashier,
            'Tax_Exempt' => $this->Tax_Exempt,
            'Move_preClose_ID' => $this->Move_preClose_ID,
            'Move_Close' => $this->Move_Close,
            'Move_Close_ID' => $this->Move_Close_ID,
            'Dine_type' => $this->Dine_type,
            'Cust_Id' => $this->Cust_Id,
            'recipient_id' => $this->recipient_id,
            'add_id' => $this->add_id,
            'Billadd_id' => $this->Billadd_id,
            'MOD_Date' => $this->MOD_Date,
            'MOD_empl' => $this->MOD_empl,
            'Driver' => $this->Driver,
            'move_people' => $this->move_people,
            'ticket_id' => $this->ticket_id,
            'Payment_id' => $this->Payment_id,
            'Pay_inFull' => $this->Pay_inFull,
            'cc_name_id' => $this->cc_name_id,
            'Docu_type_ID' => $this->Docu_type_ID,
            'Salestype_id' => $this->Salestype_id,
            'EZway_order' => $this->EZway_order,
            'Salesper_id' => $this->Salesper_id,
            'Onaccount_tip' => $this->Onaccount_tip,
            'pago_id' => $this->pago_id,
            'sunat_sent' => $this->sunat_sent,
            'group_id' => $this->group_id,
            'e_approved' => $this->e_approved,
            'Batched' => $this->Batched,
            'Updated' => $this->Updated,
        ]);

        $query->andFilterWhere(['like', 'Ticket_count', $this->Ticket_count])
            ->andFilterWhere(['like', 'Move_msg', $this->Move_msg])
            ->andFilterWhere(['like', 'Move_Regi_name', $this->Move_Regi_name])
            ->andFilterWhere(['like', 'Move_User_Login', $this->Move_User_Login])
            ->andFilterWhere(['like', 'Cuenta_Name', $this->Cuenta_Name])
            ->andFilterWhere(['like', 'Move_refer', $this->Move_refer])
            ->andFilterWhere(['like', 'Table_name', $this->Table_name])
            ->andFilterWhere(['like', 'ITEMS_Picture', $this->ITEMS_Picture])
            ->andFilterWhere(['like', 'note_credit', $this->note_credit])
            ->andFilterWhere(['like', 'packlist_id', $this->packlist_id])
            ->andFilterWhere(['like', 'e_id', $this->e_id])
            ->andFilterWhere(['like', 'Customer_Picture', $this->Customer_Picture])
            ->andFilterWhere(['like', 'e_filename', $this->e_filename])
            ->andFilterWhere(['like', 'e_document', $this->e_document])
            ->andFilterWhere(['like', 'e_documentdet', $this->e_documentdet])
            ->andFilterWhere(['like', 'e_signature', $this->e_signature]);

        return $dataProvider;
    }
}
