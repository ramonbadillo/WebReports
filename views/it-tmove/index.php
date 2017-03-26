<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItTmoveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'It Tmoves');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-tmove-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create It Tmove'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Move_ID',
            'Ticket_count',
            'Move_Cust_ID',
            'Move_Oper_ID',
            'Move_Date',
            // 'Move_Due_Date',
            // 'Move_Fiscal_Date',
            // 'Driver_time_out',
            // 'Driver_Delivered_Time',
            // 'Move_Order_Created',
            // 'Move_Completed',
            // 'Move_msg:ntext',
            // 'Move_Regi_name:ntext',
            // 'Move_User_Login:ntext',
            // 'Cuenta_Name',
            // 'Move_host',
            // 'Move_Credit_Value',
            // 'Move_Cash_Value',
            // 'Move_Debit_Value',
            // 'Move_Check_Value',
            // 'Move_Stamp_Value',
            // 'Move_wic_Value',
            // 'Money_Conv',
            // 'Move_Gift_Value',
            // 'move_onaccount_Value',
            // 'Move_CRNOTE_Value',
            // 'move_tip_Value',
            // 'grat_cc_tip',
            // 'move_Delivery_Value',
            // 'Move_amount_Tender',
            // 'Credit_tip',
            // 'Move_cashier',
            // 'Tax_Exempt',
            // 'Move_preClose_ID',
            // 'Move_Close',
            // 'Move_Close_ID',
            // 'Move_refer:ntext',
            // 'Dine_type',
            // 'Table_name:ntext',
            // 'Cust_Id',
            // 'recipient_id',
            // 'add_id',
            // 'Billadd_id',
            // 'MOD_Date',
            // 'MOD_empl',
            // 'Driver',
            // 'move_people',
            // 'ticket_id',
            // 'Payment_id',
            // 'Pay_inFull',
            // 'cc_name_id',
            // 'ITEMS_Picture',
            // 'Docu_type_ID',
            // 'Salestype_id',
            // 'note_credit',
            // 'EZway_order',
            // 'Salesper_id',
            // 'packlist_id',
            // 'Onaccount_tip',
            // 'e_id',
            // 'Customer_Picture',
            // 'pago_id',
            // 'sunat_sent',
            // 'group_id',
            // 'e_filename',
            // 'e_document:ntext',
            // 'e_documentdet:ntext',
            // 'e_signature:ntext',
            // 'e_approved',
            // 'Batched',
            // 'Updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
