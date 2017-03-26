<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "it_titem".
 *
 * @property integer $ITEM_UID
 * @property string $ITEM_ID
 * @property resource $ITEM_Picture
 * @property string $ITEM_Description
 * @property string $ITEM_Det_Description
 * @property string $ITEM_Screen_Name
 * @property string $ITEM_kitchen_Name
 * @property string $ITEM_kitchen_Name2
 * @property integer $ITEM_Prefer_ID
 * @property integer $ITEM_Unit_ID
 * @property string $Item_UM
 * @property integer $ITEM_Type_ID
 * @property integer $ITEM_Class_ID
 * @property integer $ITEM_Sub_Class_ID
 * @property integer $ITEM_Fam_ID
 * @property integer $ITEM_Sub_Fam_ID
 * @property integer $ITEM_Cate_ID
 * @property integer $ITEM_SubC_ID
 * @property integer $ITEM_Depa_ID
 * @property string $ITEM_Ubic_Pass
 * @property string $ITEM_Ubic_Stant
 * @property string $ITEM_Ubic_Col
 * @property string $ITEM_Ubic_Row
 * @property string $ITEM_Sale_Price
 * @property string $ITEM_Sale_Price2
 * @property string $ITEM_Sale_Price3
 * @property string $ITEM_Cost
 * @property integer $ITEM_Account_ID
 * @property integer $ITEM_Inco_Account_ID
 * @property integer $ITEM_Vend_ID
 * @property string $ITEM_Vend_PN
 * @property string $ITEM_Invo_Message
 * @property string $ITEM_Reorder
 * @property integer $Prioridad
 * @property integer $ITEM_Show
 * @property string $Recipes
 * @property integer $ITEM_topping_ID
 * @property integer $Kit_red_color
 * @property integer $item_active
 * @property integer $Part_Inventory
 * @property integer $item_modi_id
 * @property string $Beg_Balance
 * @property integer $Show_modi
 * @property string $Created_date
 * @property string $Modify_date
 * @property string $Modify_by
 * @property string $Unit_Sub_Q
 * @property integer $SubITEM_Unit_ID
 * @property string $in_stock
 * @property string $Reorder_Quantity
 * @property string $Num_Bonus_Points
 * @property integer $RentalYES
 * @property string $rent_fee
 * @property string $EXP_Date
 * @property string $Last_Sold
 * @property integer $Exclude_From_Loyalty
 * @property integer $ITEM_ShowOnBB
 * @property integer $opt_num_seri
 * @property integer $warr_months
 * @property string $ISC_tax
 * @property integer $Novar_costtax
 * @property integer $Production_Item
 * @property integer $Byportion_Item
 * @property integer $Print_barcode
 * @property integer $Stock_Room
 * @property string $item_tax1
 * @property string $item_tax2
 * @property string $item_tax3
 * @property integer $Scr_arr_inv
 * @property integer $invscr_noshow
 * @property string $Commiused
 * @property double $qtyspc
 * @property integer $Stock_WebChanged
 * @property integer $ITEM_Show_Web
 * @property integer $line_discount
 * @property integer $open_item
 * @property integer $Disc_item
 * @property string $AndroidSyncs
 * @property string $mod_online
 * @property integer $Ticket_disc
 * @property string $perish_price
 * @property string $ITEM_LOCAL_ID
 * @property integer $item_game_duration
 * @property double $Item_TARE
 * @property integer $show_pic
 * @property integer $Batched
 * @property integer $Updated
 */
class ItTitem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'it_titem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ITEM_ID'], 'required'],
            [['ITEM_Picture', 'ITEM_Det_Description', 'ITEM_Vend_PN', 'ITEM_Invo_Message', 'Recipes', 'AndroidSyncs'], 'string'],
            [['ITEM_Prefer_ID', 'ITEM_Unit_ID', 'ITEM_Type_ID', 'ITEM_Class_ID', 'ITEM_Sub_Class_ID', 'ITEM_Fam_ID', 'ITEM_Sub_Fam_ID', 'ITEM_Cate_ID', 'ITEM_SubC_ID', 'ITEM_Depa_ID', 'ITEM_Account_ID', 'ITEM_Inco_Account_ID', 'ITEM_Vend_ID', 'Prioridad', 'ITEM_Show', 'ITEM_topping_ID', 'Kit_red_color', 'item_active', 'Part_Inventory', 'item_modi_id', 'Show_modi', 'SubITEM_Unit_ID', 'RentalYES', 'Exclude_From_Loyalty', 'ITEM_ShowOnBB', 'opt_num_seri', 'warr_months', 'Novar_costtax', 'Production_Item', 'Byportion_Item', 'Print_barcode', 'Stock_Room', 'Scr_arr_inv', 'invscr_noshow', 'Stock_WebChanged', 'ITEM_Show_Web', 'line_discount', 'open_item', 'Disc_item', 'Ticket_disc', 'item_game_duration', 'show_pic', 'Batched', 'Updated'], 'integer'],
            [['ITEM_Sale_Price', 'ITEM_Sale_Price2', 'ITEM_Sale_Price3', 'ITEM_Cost', 'ITEM_Reorder', 'Beg_Balance', 'in_stock', 'Reorder_Quantity', 'rent_fee', 'ISC_tax', 'item_tax1', 'item_tax2', 'item_tax3', 'Commiused', 'qtyspc', 'perish_price', 'Item_TARE'], 'number'],
            [['Created_date', 'Modify_date', 'EXP_Date', 'Last_Sold', 'mod_online'], 'safe'],
            [['ITEM_ID'], 'string', 'max' => 50],
            [['ITEM_Description', 'ITEM_Screen_Name', 'ITEM_kitchen_Name', 'ITEM_kitchen_Name2'], 'string', 'max' => 52],
            [['Item_UM', 'ITEM_Ubic_Pass', 'ITEM_Ubic_Stant', 'ITEM_Ubic_Col', 'ITEM_Ubic_Row', 'Unit_Sub_Q'], 'string', 'max' => 10],
            [['Modify_by'], 'string', 'max' => 5],
            [['Num_Bonus_Points'], 'string', 'max' => 20],
            [['ITEM_LOCAL_ID'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ITEM_UID' => Yii::t('app', 'Item  Uid'),
            'ITEM_ID' => Yii::t('app', 'Item  ID'),
            'ITEM_Picture' => Yii::t('app', 'Item  Picture'),
            'ITEM_Description' => Yii::t('app', 'Item  Description'),
            'ITEM_Det_Description' => Yii::t('app', 'Item  Det  Description'),
            'ITEM_Screen_Name' => Yii::t('app', 'Item  Screen  Name'),
            'ITEM_kitchen_Name' => Yii::t('app', 'Item Kitchen  Name'),
            'ITEM_kitchen_Name2' => Yii::t('app', 'Item Kitchen  Name2'),
            'ITEM_Prefer_ID' => Yii::t('app', 'Item  Prefer  ID'),
            'ITEM_Unit_ID' => Yii::t('app', 'Item  Unit  ID'),
            'Item_UM' => Yii::t('app', 'Item  Um'),
            'ITEM_Type_ID' => Yii::t('app', 'Item  Type  ID'),
            'ITEM_Class_ID' => Yii::t('app', 'Item  Class  ID'),
            'ITEM_Sub_Class_ID' => Yii::t('app', 'Item  Sub  Class  ID'),
            'ITEM_Fam_ID' => Yii::t('app', 'Item  Fam  ID'),
            'ITEM_Sub_Fam_ID' => Yii::t('app', 'Item  Sub  Fam  ID'),
            'ITEM_Cate_ID' => Yii::t('app', 'Item  Cate  ID'),
            'ITEM_SubC_ID' => Yii::t('app', 'Item  Sub C  ID'),
            'ITEM_Depa_ID' => Yii::t('app', 'Item  Depa  ID'),
            'ITEM_Ubic_Pass' => Yii::t('app', 'Item  Ubic  Pass'),
            'ITEM_Ubic_Stant' => Yii::t('app', 'Item  Ubic  Stant'),
            'ITEM_Ubic_Col' => Yii::t('app', 'Item  Ubic  Col'),
            'ITEM_Ubic_Row' => Yii::t('app', 'Item  Ubic  Row'),
            'ITEM_Sale_Price' => Yii::t('app', 'Item  Sale  Price'),
            'ITEM_Sale_Price2' => Yii::t('app', 'Item  Sale  Price2'),
            'ITEM_Sale_Price3' => Yii::t('app', 'Item  Sale  Price3'),
            'ITEM_Cost' => Yii::t('app', 'Item  Cost'),
            'ITEM_Account_ID' => Yii::t('app', 'Item  Account  ID'),
            'ITEM_Inco_Account_ID' => Yii::t('app', 'Item  Inco  Account  ID'),
            'ITEM_Vend_ID' => Yii::t('app', 'Item  Vend  ID'),
            'ITEM_Vend_PN' => Yii::t('app', 'Item  Vend  Pn'),
            'ITEM_Invo_Message' => Yii::t('app', 'Item  Invo  Message'),
            'ITEM_Reorder' => Yii::t('app', 'Item  Reorder'),
            'Prioridad' => Yii::t('app', 'Prioridad'),
            'ITEM_Show' => Yii::t('app', 'Item  Show'),
            'Recipes' => Yii::t('app', 'Recipes'),
            'ITEM_topping_ID' => Yii::t('app', 'Item Topping  ID'),
            'Kit_red_color' => Yii::t('app', 'Kit Red Color'),
            'item_active' => Yii::t('app', 'Item Active'),
            'Part_Inventory' => Yii::t('app', 'Part  Inventory'),
            'item_modi_id' => Yii::t('app', 'Item Modi ID'),
            'Beg_Balance' => Yii::t('app', 'Beg  Balance'),
            'Show_modi' => Yii::t('app', 'Show Modi'),
            'Created_date' => Yii::t('app', 'Created Date'),
            'Modify_date' => Yii::t('app', 'Modify Date'),
            'Modify_by' => Yii::t('app', 'Modify By'),
            'Unit_Sub_Q' => Yii::t('app', 'Unit  Sub  Q'),
            'SubITEM_Unit_ID' => Yii::t('app', 'Sub Item  Unit  ID'),
            'in_stock' => Yii::t('app', 'In Stock'),
            'Reorder_Quantity' => Yii::t('app', 'Reorder  Quantity'),
            'Num_Bonus_Points' => Yii::t('app', 'Num  Bonus  Points'),
            'RentalYES' => Yii::t('app', 'Rental Yes'),
            'rent_fee' => Yii::t('app', 'Rent Fee'),
            'EXP_Date' => Yii::t('app', 'Exp  Date'),
            'Last_Sold' => Yii::t('app', 'Last  Sold'),
            'Exclude_From_Loyalty' => Yii::t('app', 'Exclude  From  Loyalty'),
            'ITEM_ShowOnBB' => Yii::t('app', 'Item  Show On Bb'),
            'opt_num_seri' => Yii::t('app', 'Opt Num Seri'),
            'warr_months' => Yii::t('app', 'Warr Months'),
            'ISC_tax' => Yii::t('app', 'Isc Tax'),
            'Novar_costtax' => Yii::t('app', 'Novar Costtax'),
            'Production_Item' => Yii::t('app', 'Production  Item'),
            'Byportion_Item' => Yii::t('app', 'Byportion  Item'),
            'Print_barcode' => Yii::t('app', 'Print Barcode'),
            'Stock_Room' => Yii::t('app', 'Stock  Room'),
            'item_tax1' => Yii::t('app', 'Item Tax1'),
            'item_tax2' => Yii::t('app', 'Item Tax2'),
            'item_tax3' => Yii::t('app', 'Item Tax3'),
            'Scr_arr_inv' => Yii::t('app', 'Scr Arr Inv'),
            'invscr_noshow' => Yii::t('app', 'Invscr Noshow'),
            'Commiused' => Yii::t('app', 'Commiused'),
            'qtyspc' => Yii::t('app', 'Qtyspc'),
            'Stock_WebChanged' => Yii::t('app', 'Stock  Web Changed'),
            'ITEM_Show_Web' => Yii::t('app', 'Item  Show  Web'),
            'line_discount' => Yii::t('app', 'Line Discount'),
            'open_item' => Yii::t('app', 'Open Item'),
            'Disc_item' => Yii::t('app', 'Disc Item'),
            'AndroidSyncs' => Yii::t('app', 'Android Syncs'),
            'mod_online' => Yii::t('app', 'Mod Online'),
            'Ticket_disc' => Yii::t('app', 'Ticket Disc'),
            'perish_price' => Yii::t('app', 'Perish Price'),
            'ITEM_LOCAL_ID' => Yii::t('app', 'Item  Local  ID'),
            'item_game_duration' => Yii::t('app', 'Item Game Duration'),
            'Item_TARE' => Yii::t('app', 'Item  Tare'),
            'show_pic' => Yii::t('app', 'Show Pic'),
            'Batched' => Yii::t('app', 'Batched'),
            'Updated' => Yii::t('app', 'Updated'),
        ];
    }

    /**
     * @inheritdoc
     * @return ItTitemQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ItTitemQuery(get_called_class());
    }
}
