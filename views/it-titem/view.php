<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ItTitem */

$this->title = $model->ITEM_UID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Titems'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-titem-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ITEM_UID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->ITEM_UID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ITEM_UID',
            'ITEM_ID',
            'ITEM_Picture',
            'ITEM_Description',
            'ITEM_Det_Description:ntext',
            'ITEM_Screen_Name',
            'ITEM_kitchen_Name',
            'ITEM_kitchen_Name2',
            'ITEM_Prefer_ID',
            'ITEM_Unit_ID',
            'Item_UM',
            'ITEM_Type_ID',
            'ITEM_Class_ID',
            'ITEM_Sub_Class_ID',
            'ITEM_Fam_ID',
            'ITEM_Sub_Fam_ID',
            'ITEM_Cate_ID',
            'ITEM_SubC_ID',
            'ITEM_Depa_ID',
            'ITEM_Ubic_Pass',
            'ITEM_Ubic_Stant',
            'ITEM_Ubic_Col',
            'ITEM_Ubic_Row',
            'ITEM_Sale_Price',
            'ITEM_Sale_Price2',
            'ITEM_Sale_Price3',
            'ITEM_Cost',
            'ITEM_Account_ID',
            'ITEM_Inco_Account_ID',
            'ITEM_Vend_ID',
            'ITEM_Vend_PN:ntext',
            'ITEM_Invo_Message:ntext',
            'ITEM_Reorder',
            'Prioridad',
            'ITEM_Show',
            'Recipes:ntext',
            'ITEM_topping_ID',
            'Kit_red_color',
            'item_active',
            'Part_Inventory',
            'item_modi_id',
            'Beg_Balance',
            'Show_modi',
            'Created_date',
            'Modify_date',
            'Modify_by',
            'Unit_Sub_Q',
            'SubITEM_Unit_ID',
            'in_stock',
            'Reorder_Quantity',
            'Num_Bonus_Points',
            'RentalYES',
            'rent_fee',
            'EXP_Date',
            'Last_Sold',
            'Exclude_From_Loyalty',
            'ITEM_ShowOnBB',
            'opt_num_seri',
            'warr_months',
            'ISC_tax',
            'Novar_costtax',
            'Production_Item',
            'Byportion_Item',
            'Print_barcode',
            'Stock_Room',
            'item_tax1',
            'item_tax2',
            'item_tax3',
            'Scr_arr_inv',
            'invscr_noshow',
            'Commiused',
            'qtyspc',
            'Stock_WebChanged',
            'ITEM_Show_Web',
            'line_discount',
            'open_item',
            'Disc_item',
            'AndroidSyncs:ntext',
            'mod_online',
            'Ticket_disc',
            'perish_price',
            'ITEM_LOCAL_ID',
            'item_game_duration',
            'Item_TARE',
            'show_pic',
            'Batched',
            'Updated',
        ],
    ]) ?>

</div>