<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "it_tmove".
 *
 * @property integer $Move_ID
 * @property string $Ticket_count
 * @property integer $Move_Cust_ID
 * @property integer $Move_Oper_ID
 * @property string $Move_Date
 * @property string $Move_Due_Date
 * @property string $Move_Fiscal_Date
 * @property string $Driver_time_out
 * @property string $Driver_Delivered_Time
 * @property string $Move_Order_Created
 * @property integer $Move_Completed
 * @property string $Move_msg
 * @property string $Move_Regi_name
 * @property string $Move_User_Login
 * @property string $Cuenta_Name
 * @property integer $Move_host
 * @property string $Move_Credit_Value
 * @property string $Move_Cash_Value
 * @property string $Move_Debit_Value
 * @property string $Move_Check_Value
 * @property string $Move_Stamp_Value
 * @property string $Move_wic_Value
 * @property string $Money_Conv
 * @property string $Move_Gift_Value
 * @property string $move_onaccount_Value
 * @property string $Move_CRNOTE_Value
 * @property string $move_tip_Value
 * @property string $grat_cc_tip
 * @property string $move_Delivery_Value
 * @property string $Move_amount_Tender
 * @property string $Credit_tip
 * @property integer $Move_cashier
 * @property integer $Tax_Exempt
 * @property integer $Move_preClose_ID
 * @property integer $Move_Close
 * @property integer $Move_Close_ID
 * @property string $Move_refer
 * @property integer $Dine_type
 * @property string $Table_name
 * @property integer $Cust_Id
 * @property integer $recipient_id
 * @property integer $add_id
 * @property integer $Billadd_id
 * @property string $MOD_Date
 * @property integer $MOD_empl
 * @property integer $Driver
 * @property integer $move_people
 * @property integer $ticket_id
 * @property integer $Payment_id
 * @property integer $Pay_inFull
 * @property integer $cc_name_id
 * @property resource $ITEMS_Picture
 * @property integer $Docu_type_ID
 * @property integer $Salestype_id
 * @property string $note_credit
 * @property integer $EZway_order
 * @property integer $Salesper_id
 * @property string $packlist_id
 * @property string $Onaccount_tip
 * @property string $e_id
 * @property resource $Customer_Picture
 * @property integer $pago_id
 * @property integer $sunat_sent
 * @property integer $group_id
 * @property string $e_filename
 * @property string $e_document
 * @property string $e_documentdet
 * @property string $e_signature
 * @property integer $e_approved
 * @property integer $Batched
 * @property integer $Updated
 *
 * @property ItTdetamove[] $itTdetamoves
 */
class ItTmove extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'it_tmove';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Move_Cust_ID', 'Move_Oper_ID', 'Move_Completed', 'Move_host', 'Move_cashier', 'Tax_Exempt', 'Move_preClose_ID', 'Move_Close', 'Move_Close_ID', 'Dine_type', 'Cust_Id', 'recipient_id', 'add_id', 'Billadd_id', 'MOD_empl', 'Driver', 'move_people', 'ticket_id', 'Payment_id', 'Pay_inFull', 'cc_name_id', 'Docu_type_ID', 'Salestype_id', 'EZway_order', 'Salesper_id', 'pago_id', 'sunat_sent', 'group_id', 'e_approved', 'Batched', 'Updated'], 'integer'],
            [['Move_Date', 'Move_Due_Date', 'Move_Fiscal_Date', 'Driver_time_out', 'Driver_Delivered_Time', 'Move_Order_Created', 'MOD_Date'], 'safe'],
            [['Move_msg', 'Move_Regi_name', 'Move_User_Login', 'Move_refer', 'Table_name', 'ITEMS_Picture', 'Customer_Picture', 'e_document', 'e_documentdet', 'e_signature'], 'string'],
            [['Move_Credit_Value', 'Move_Cash_Value', 'Move_Debit_Value', 'Move_Check_Value', 'Move_Stamp_Value', 'Move_wic_Value', 'Money_Conv', 'Move_Gift_Value', 'move_onaccount_Value', 'Move_CRNOTE_Value', 'move_tip_Value', 'grat_cc_tip', 'move_Delivery_Value', 'Move_amount_Tender', 'Credit_tip', 'Onaccount_tip'], 'number'],
            [['Ticket_count', 'Cuenta_Name', 'note_credit', 'packlist_id', 'e_id'], 'string', 'max' => 50],
            [['e_filename'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Move_ID' => Yii::t('app', 'Move  ID'),
            'Ticket_count' => Yii::t('app', 'Ticket Count'),
            'Move_Cust_ID' => Yii::t('app', 'Move  Cust  ID'),
            'Move_Oper_ID' => Yii::t('app', 'Move  Oper  ID'),
            'Move_Date' => Yii::t('app', 'Move  Date'),
            'Move_Due_Date' => Yii::t('app', 'Move  Due  Date'),
            'Move_Fiscal_Date' => Yii::t('app', 'Move  Fiscal  Date'),
            'Driver_time_out' => Yii::t('app', 'Driver Time Out'),
            'Driver_Delivered_Time' => Yii::t('app', 'Driver  Delivered  Time'),
            'Move_Order_Created' => Yii::t('app', 'Move  Order  Created'),
            'Move_Completed' => Yii::t('app', 'Move  Completed'),
            'Move_msg' => Yii::t('app', 'Move Msg'),
            'Move_Regi_name' => Yii::t('app', 'Move  Regi Name'),
            'Move_User_Login' => Yii::t('app', 'Move  User  Login'),
            'Cuenta_Name' => Yii::t('app', 'Cuenta  Name'),
            'Move_host' => Yii::t('app', 'Move Host'),
            'Move_Credit_Value' => Yii::t('app', 'Move  Credit  Value'),
            'Move_Cash_Value' => Yii::t('app', 'Move  Cash  Value'),
            'Move_Debit_Value' => Yii::t('app', 'Move  Debit  Value'),
            'Move_Check_Value' => Yii::t('app', 'Move  Check  Value'),
            'Move_Stamp_Value' => Yii::t('app', 'Move  Stamp  Value'),
            'Move_wic_Value' => Yii::t('app', 'Move Wic  Value'),
            'Money_Conv' => Yii::t('app', 'Money  Conv'),
            'Move_Gift_Value' => Yii::t('app', 'Move  Gift  Value'),
            'move_onaccount_Value' => Yii::t('app', 'Move Onaccount  Value'),
            'Move_CRNOTE_Value' => Yii::t('app', 'Move  Crnote  Value'),
            'move_tip_Value' => Yii::t('app', 'Move Tip  Value'),
            'grat_cc_tip' => Yii::t('app', 'Grat Cc Tip'),
            'move_Delivery_Value' => Yii::t('app', 'Move  Delivery  Value'),
            'Move_amount_Tender' => Yii::t('app', 'Move Amount  Tender'),
            'Credit_tip' => Yii::t('app', 'Credit Tip'),
            'Move_cashier' => Yii::t('app', 'Move Cashier'),
            'Tax_Exempt' => Yii::t('app', 'Tax  Exempt'),
            'Move_preClose_ID' => Yii::t('app', 'Move Pre Close  ID'),
            'Move_Close' => Yii::t('app', 'Move  Close'),
            'Move_Close_ID' => Yii::t('app', 'Move  Close  ID'),
            'Move_refer' => Yii::t('app', 'Move Refer'),
            'Dine_type' => Yii::t('app', 'Dine Type'),
            'Table_name' => Yii::t('app', 'Table Name'),
            'Cust_Id' => Yii::t('app', 'Cust  ID'),
            'recipient_id' => Yii::t('app', 'Recipient ID'),
            'add_id' => Yii::t('app', 'Add ID'),
            'Billadd_id' => Yii::t('app', 'Billadd ID'),
            'MOD_Date' => Yii::t('app', 'Mod  Date'),
            'MOD_empl' => Yii::t('app', 'Mod Empl'),
            'Driver' => Yii::t('app', 'Driver'),
            'move_people' => Yii::t('app', 'Move People'),
            'ticket_id' => Yii::t('app', 'Ticket ID'),
            'Payment_id' => Yii::t('app', 'Payment ID'),
            'Pay_inFull' => Yii::t('app', 'Pay In Full'),
            'cc_name_id' => Yii::t('app', 'Cc Name ID'),
            'ITEMS_Picture' => Yii::t('app', 'Items  Picture'),
            'Docu_type_ID' => Yii::t('app', 'Docu Type  ID'),
            'Salestype_id' => Yii::t('app', 'Salestype ID'),
            'note_credit' => Yii::t('app', 'Note Credit'),
            'EZway_order' => Yii::t('app', 'Ezway Order'),
            'Salesper_id' => Yii::t('app', 'Salesper ID'),
            'packlist_id' => Yii::t('app', 'Packlist ID'),
            'Onaccount_tip' => Yii::t('app', 'Onaccount Tip'),
            'e_id' => Yii::t('app', 'E ID'),
            'Customer_Picture' => Yii::t('app', 'Customer  Picture'),
            'pago_id' => Yii::t('app', 'Pago ID'),
            'sunat_sent' => Yii::t('app', 'Sunat Sent'),
            'group_id' => Yii::t('app', 'Group ID'),
            'e_filename' => Yii::t('app', 'E Filename'),
            'e_document' => Yii::t('app', 'E Document'),
            'e_documentdet' => Yii::t('app', 'E Documentdet'),
            'e_signature' => Yii::t('app', 'E Signature'),
            'e_approved' => Yii::t('app', 'E Approved'),
            'Batched' => Yii::t('app', 'Batched'),
            'Updated' => Yii::t('app', 'Updated'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItTdetamoves()
    {
        return $this->hasMany(ItTdetamove::className(), ['Move_Deta_Move_ID' => 'Move_ID']);
    }

    /**
     * @inheritdoc
     * @return ItTmoveQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ItTmoveQuery(get_called_class());
    }
}
