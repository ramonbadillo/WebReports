<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItTdetamoveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'It Tdetamoves');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-tdetamove-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create It Tdetamove'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Move_Deta_ID',
            'Move_Deta_Move_ID',
            'Move_Deta_ITEM_ID',
            'Subitem_of',
            'Move_Deta_Q',
            // 'Move_deta_UM',
            // 'Move_Deta_K',
            // 'Move_Deta_price',
            // 'Move_Deta_Tax_Value',
            // 'Move_Deta_Tax2_Value',
            // 'Move_Deta_Tax3_Value',
            // 'Move_REG_price',
            // 'detamove_incl_tax',
            // 'sold_mode',
            // 'Note',
            // 'Detalles:ntext',
            // 'On_Sale',
            // 'Item_complete',
            // 'Date_complete',
            // 'Order_ID',
            // 'Order_Table_name',
            // 'Chair_ID',
            // 'order_host',
            // 'man_apprid',
            // 'Serial_Num:ntext',
            // 'expi_date',
            // 'ITEMS_Picture',
            // 'rentaldays',
            // 'rental',
            // 'Returned_id',
            // 'Stock_Room',
            // 'Discount_Code',
            // 'modi',
            // 'Order_Regi_name:ntext',
            // 'Inv_Close_ID',
            // 'Move_Deta_Guia_ID',
            // 'Commicost',
            // 'Commipaid_id',
            // 'sent_to',
            // 'gift_id',
            // 'Vendor_id',
            // 'origi_cuentaID',
            // 'Order_Time_in',
            // 'Order_Item_PREFERENCE:ntext',
            // 'Date_Rented',
            // 'Move_Deta_Ori_Q',
            // 'Batched',
            // 'Updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
