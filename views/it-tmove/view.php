<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ItTmove */

$this->title = $model->Move_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Tmoves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-tmove-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->Move_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->Move_ID], [
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
            'Move_ID',
            'Ticket_count',
            'Move_Cust_ID',
            'Move_Oper_ID',
            'Move_Date',
            'Move_Due_Date',
            'Move_Fiscal_Date',
            'Driver_time_out',
            'Driver_Delivered_Time',
            'Move_Order_Created',
            'Move_Completed',
            'Move_msg:ntext',
            'Move_Regi_name:ntext',
            'Move_User_Login:ntext',
            'Cuenta_Name',
            'Move_host',
            'Move_Credit_Value',
            'Move_Cash_Value',
            'Move_Debit_Value',
            'Move_Check_Value',
            'Move_Stamp_Value',
            'Move_wic_Value',
            'Money_Conv',
            'Move_Gift_Value',
            'move_onaccount_Value',
            'Move_CRNOTE_Value',
            'move_tip_Value',
            'grat_cc_tip',
            'move_Delivery_Value',
            'Move_amount_Tender',
            'Credit_tip',
            'Move_cashier',
            'Tax_Exempt',
            'Move_preClose_ID',
            'Move_Close',
            'Move_Close_ID',
            'Move_refer:ntext',
            'Dine_type',
            'Table_name:ntext',
            'Cust_Id',
            'recipient_id',
            'add_id',
            'Billadd_id',
            'MOD_Date',
            'MOD_empl',
            'Driver',
            'move_people',
            'ticket_id',
            'Payment_id',
            'Pay_inFull',
            'cc_name_id',
            'ITEMS_Picture',
            'Docu_type_ID',
            'Salestype_id',
            'note_credit',
            'EZway_order',
            'Salesper_id',
            'packlist_id',
            'Onaccount_tip',
            'e_id',
            'Customer_Picture',
            'pago_id',
            'sunat_sent',
            'group_id',
            'e_filename',
            'e_document:ntext',
            'e_documentdet:ntext',
            'e_signature:ntext',
            'e_approved',
            'Batched',
            'Updated',
        ],
    ]) ?>

</div>
