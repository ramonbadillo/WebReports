<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTmoveSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-tmove-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Move_ID') ?>

    <?= $form->field($model, 'Ticket_count') ?>

    <?= $form->field($model, 'Move_Cust_ID') ?>

    <?= $form->field($model, 'Move_Oper_ID') ?>

    <?= $form->field($model, 'Move_Date') ?>

    <?php // echo $form->field($model, 'Move_Due_Date') ?>

    <?php // echo $form->field($model, 'Move_Fiscal_Date') ?>

    <?php // echo $form->field($model, 'Driver_time_out') ?>

    <?php // echo $form->field($model, 'Driver_Delivered_Time') ?>

    <?php // echo $form->field($model, 'Move_Order_Created') ?>

    <?php // echo $form->field($model, 'Move_Completed') ?>

    <?php // echo $form->field($model, 'Move_msg') ?>

    <?php // echo $form->field($model, 'Move_Regi_name') ?>

    <?php // echo $form->field($model, 'Move_User_Login') ?>

    <?php // echo $form->field($model, 'Cuenta_Name') ?>

    <?php // echo $form->field($model, 'Move_host') ?>

    <?php // echo $form->field($model, 'Move_Credit_Value') ?>

    <?php // echo $form->field($model, 'Move_Cash_Value') ?>

    <?php // echo $form->field($model, 'Move_Debit_Value') ?>

    <?php // echo $form->field($model, 'Move_Check_Value') ?>

    <?php // echo $form->field($model, 'Move_Stamp_Value') ?>

    <?php // echo $form->field($model, 'Move_wic_Value') ?>

    <?php // echo $form->field($model, 'Money_Conv') ?>

    <?php // echo $form->field($model, 'Move_Gift_Value') ?>

    <?php // echo $form->field($model, 'move_onaccount_Value') ?>

    <?php // echo $form->field($model, 'Move_CRNOTE_Value') ?>

    <?php // echo $form->field($model, 'move_tip_Value') ?>

    <?php // echo $form->field($model, 'grat_cc_tip') ?>

    <?php // echo $form->field($model, 'move_Delivery_Value') ?>

    <?php // echo $form->field($model, 'Move_amount_Tender') ?>

    <?php // echo $form->field($model, 'Credit_tip') ?>

    <?php // echo $form->field($model, 'Move_cashier') ?>

    <?php // echo $form->field($model, 'Tax_Exempt') ?>

    <?php // echo $form->field($model, 'Move_preClose_ID') ?>

    <?php // echo $form->field($model, 'Move_Close') ?>

    <?php // echo $form->field($model, 'Move_Close_ID') ?>

    <?php // echo $form->field($model, 'Move_refer') ?>

    <?php // echo $form->field($model, 'Dine_type') ?>

    <?php // echo $form->field($model, 'Table_name') ?>

    <?php // echo $form->field($model, 'Cust_Id') ?>

    <?php // echo $form->field($model, 'recipient_id') ?>

    <?php // echo $form->field($model, 'add_id') ?>

    <?php // echo $form->field($model, 'Billadd_id') ?>

    <?php // echo $form->field($model, 'MOD_Date') ?>

    <?php // echo $form->field($model, 'MOD_empl') ?>

    <?php // echo $form->field($model, 'Driver') ?>

    <?php // echo $form->field($model, 'move_people') ?>

    <?php // echo $form->field($model, 'ticket_id') ?>

    <?php // echo $form->field($model, 'Payment_id') ?>

    <?php // echo $form->field($model, 'Pay_inFull') ?>

    <?php // echo $form->field($model, 'cc_name_id') ?>

    <?php // echo $form->field($model, 'ITEMS_Picture') ?>

    <?php // echo $form->field($model, 'Docu_type_ID') ?>

    <?php // echo $form->field($model, 'Salestype_id') ?>

    <?php // echo $form->field($model, 'note_credit') ?>

    <?php // echo $form->field($model, 'EZway_order') ?>

    <?php // echo $form->field($model, 'Salesper_id') ?>

    <?php // echo $form->field($model, 'packlist_id') ?>

    <?php // echo $form->field($model, 'Onaccount_tip') ?>

    <?php // echo $form->field($model, 'e_id') ?>

    <?php // echo $form->field($model, 'Customer_Picture') ?>

    <?php // echo $form->field($model, 'pago_id') ?>

    <?php // echo $form->field($model, 'sunat_sent') ?>

    <?php // echo $form->field($model, 'group_id') ?>

    <?php // echo $form->field($model, 'e_filename') ?>

    <?php // echo $form->field($model, 'e_document') ?>

    <?php // echo $form->field($model, 'e_documentdet') ?>

    <?php // echo $form->field($model, 'e_signature') ?>

    <?php // echo $form->field($model, 'e_approved') ?>

    <?php // echo $form->field($model, 'Batched') ?>

    <?php // echo $form->field($model, 'Updated') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
