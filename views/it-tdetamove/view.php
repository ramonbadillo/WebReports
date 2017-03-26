<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ItTdetamove */

$this->title = $model->Move_Deta_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Tdetamoves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-tdetamove-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->Move_Deta_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->Move_Deta_ID], [
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
            'Move_Deta_ID',
            'Move_Deta_Move_ID',
            'Move_Deta_ITEM_ID',
            'Subitem_of',
            'Move_Deta_Q',
            'Move_deta_UM',
            'Move_Deta_K',
            'Move_Deta_price',
            'Move_Deta_Tax_Value',
            'Move_Deta_Tax2_Value',
            'Move_Deta_Tax3_Value',
            'Move_REG_price',
            'detamove_incl_tax',
            'sold_mode',
            'Note',
            'Detalles:ntext',
            'On_Sale',
            'Item_complete',
            'Date_complete',
            'Order_ID',
            'Order_Table_name',
            'Chair_ID',
            'order_host',
            'man_apprid',
            'Serial_Num:ntext',
            'expi_date',
            'ITEMS_Picture',
            'rentaldays',
            'rental',
            'Returned_id',
            'Stock_Room',
            'Discount_Code',
            'modi',
            'Order_Regi_name:ntext',
            'Inv_Close_ID',
            'Move_Deta_Guia_ID',
            'Commicost',
            'Commipaid_id',
            'sent_to',
            'gift_id',
            'Vendor_id',
            'origi_cuentaID',
            'Order_Time_in',
            'Order_Item_PREFERENCE:ntext',
            'Date_Rented',
            'Move_Deta_Ori_Q',
            'Batched',
            'Updated',
        ],
    ]) ?>

</div>
