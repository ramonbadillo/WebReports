<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "it_tdetamove".
 *
 * @property integer $Move_Deta_ID
 * @property integer $Move_Deta_Move_ID
 * @property string $Move_Deta_ITEM_ID
 * @property integer $Subitem_of
 * @property double $Move_Deta_Q
 * @property string $Move_deta_UM
 * @property string $Move_Deta_K
 * @property string $Move_Deta_price
 * @property string $Move_Deta_Tax_Value
 * @property string $Move_Deta_Tax2_Value
 * @property string $Move_Deta_Tax3_Value
 * @property string $Move_REG_price
 * @property integer $detamove_incl_tax
 * @property integer $sold_mode
 * @property integer $Note
 * @property string $Detalles
 * @property integer $On_Sale
 * @property integer $Item_complete
 * @property string $Date_complete
 * @property integer $Order_ID
 * @property string $Order_Table_name
 * @property string $Chair_ID
 * @property integer $order_host
 * @property integer $man_apprid
 * @property string $Serial_Num
 * @property string $expi_date
 * @property resource $ITEMS_Picture
 * @property integer $rentaldays
 * @property integer $rental
 * @property string $Returned_id
 * @property integer $Stock_Room
 * @property string $Discount_Code
 * @property integer $modi
 * @property string $Order_Regi_name
 * @property integer $Inv_Close_ID
 * @property integer $Move_Deta_Guia_ID
 * @property string $Commicost
 * @property integer $Commipaid_id
 * @property integer $sent_to
 * @property integer $gift_id
 * @property integer $Vendor_id
 * @property integer $origi_cuentaID
 * @property string $Order_Time_in
 * @property string $Order_Item_PREFERENCE
 * @property string $Date_Rented
 * @property double $Move_Deta_Ori_Q
 * @property integer $Batched
 * @property integer $Updated
 */
class ItTdetamove extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'it_tdetamove';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Move_Deta_Move_ID', 'Subitem_of', 'detamove_incl_tax', 'sold_mode', 'Note', 'On_Sale', 'Item_complete', 'Order_ID', 'order_host', 'man_apprid', 'rentaldays', 'rental', 'Stock_Room', 'modi', 'Inv_Close_ID', 'Move_Deta_Guia_ID', 'Commipaid_id', 'sent_to', 'gift_id', 'Vendor_id', 'origi_cuentaID', 'Batched', 'Updated'], 'integer'],
            [['Move_Deta_Q', 'Move_Deta_K', 'Move_Deta_price', 'Move_Deta_Tax_Value', 'Move_Deta_Tax2_Value', 'Move_Deta_Tax3_Value', 'Move_REG_price', 'Commicost', 'Move_Deta_Ori_Q'], 'number'],
            [['Detalles', 'Serial_Num', 'ITEMS_Picture', 'Order_Regi_name', 'Order_Item_PREFERENCE'], 'string'],
            [['Date_complete', 'expi_date', 'Order_Time_in', 'Date_Rented'], 'safe'],
            [['Move_Deta_ITEM_ID', 'Order_Table_name', 'Returned_id'], 'string', 'max' => 50],
            [['Move_deta_UM'], 'string', 'max' => 10],
            [['Chair_ID'], 'string', 'max' => 4],
            [['Discount_Code'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Move_Deta_ID' => Yii::t('app', 'Move  Deta  ID'),
            'Move_Deta_Move_ID' => Yii::t('app', 'Move  Deta  Move  ID'),
            'Move_Deta_ITEM_ID' => Yii::t('app', 'Move  Deta  Item  ID'),
            'Subitem_of' => Yii::t('app', 'Subitem Of'),
            'Move_Deta_Q' => Yii::t('app', 'Move  Deta  Q'),
            'Move_deta_UM' => Yii::t('app', 'Move Deta  Um'),
            'Move_Deta_K' => Yii::t('app', 'Move  Deta  K'),
            'Move_Deta_price' => Yii::t('app', 'Move  Deta Price'),
            'Move_Deta_Tax_Value' => Yii::t('app', 'Move  Deta  Tax  Value'),
            'Move_Deta_Tax2_Value' => Yii::t('app', 'Move  Deta  Tax2  Value'),
            'Move_Deta_Tax3_Value' => Yii::t('app', 'Move  Deta  Tax3  Value'),
            'Move_REG_price' => Yii::t('app', 'Move  Reg Price'),
            'detamove_incl_tax' => Yii::t('app', 'Detamove Incl Tax'),
            'sold_mode' => Yii::t('app', 'Sold Mode'),
            'Note' => Yii::t('app', 'Note'),
            'Detalles' => Yii::t('app', 'Detalles'),
            'On_Sale' => Yii::t('app', 'On  Sale'),
            'Item_complete' => Yii::t('app', 'Item Complete'),
            'Date_complete' => Yii::t('app', 'Date Complete'),
            'Order_ID' => Yii::t('app', 'Order  ID'),
            'Order_Table_name' => Yii::t('app', 'Order  Table Name'),
            'Chair_ID' => Yii::t('app', 'Chair  ID'),
            'order_host' => Yii::t('app', 'Order Host'),
            'man_apprid' => Yii::t('app', 'Man Apprid'),
            'Serial_Num' => Yii::t('app', 'Serial  Num'),
            'expi_date' => Yii::t('app', 'Expi Date'),
            'ITEMS_Picture' => Yii::t('app', 'Items  Picture'),
            'rentaldays' => Yii::t('app', 'Rentaldays'),
            'rental' => Yii::t('app', 'Rental'),
            'Returned_id' => Yii::t('app', 'Returned ID'),
            'Stock_Room' => Yii::t('app', 'Stock  Room'),
            'Discount_Code' => Yii::t('app', 'Discount  Code'),
            'modi' => Yii::t('app', 'Modi'),
            'Order_Regi_name' => Yii::t('app', 'Order  Regi Name'),
            'Inv_Close_ID' => Yii::t('app', 'Inv  Close  ID'),
            'Move_Deta_Guia_ID' => Yii::t('app', 'Move  Deta  Guia  ID'),
            'Commicost' => Yii::t('app', 'Commicost'),
            'Commipaid_id' => Yii::t('app', 'Commipaid ID'),
            'sent_to' => Yii::t('app', 'Sent To'),
            'gift_id' => Yii::t('app', 'Gift ID'),
            'Vendor_id' => Yii::t('app', 'Vendor ID'),
            'origi_cuentaID' => Yii::t('app', 'Origi Cuenta ID'),
            'Order_Time_in' => Yii::t('app', 'Order  Time In'),
            'Order_Item_PREFERENCE' => Yii::t('app', 'Order  Item  Preference'),
            'Date_Rented' => Yii::t('app', 'Date  Rented'),
            'Move_Deta_Ori_Q' => Yii::t('app', 'Move  Deta  Ori  Q'),
            'Batched' => Yii::t('app', 'Batched'),
            'Updated' => Yii::t('app', 'Updated'),
        ];
    }

    /**
     * @inheritdoc
     * @return ItTdetamoveQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ItTdetamoveQuery(get_called_class());
    }
}
