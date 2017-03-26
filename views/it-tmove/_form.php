<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTmove */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-tmove-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Ticket_count')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_Cust_ID')->textInput() ?>

    <?= $form->field($model, 'Move_Oper_ID')->textInput() ?>

    <?= $form->field($model, 'Move_Date')->textInput() ?>

    <?= $form->field($model, 'Move_Due_Date')->textInput() ?>

    <?= $form->field($model, 'Move_Fiscal_Date')->textInput() ?>

    <?= $form->field($model, 'Driver_time_out')->textInput() ?>

    <?= $form->field($model, 'Driver_Delivered_Time')->textInput() ?>

    <?= $form->field($model, 'Move_Order_Created')->textInput() ?>

    <?= $form->field($model, 'Move_Completed')->textInput() ?>

    <?= $form->field($model, 'Move_msg')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Move_Regi_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Move_User_Login')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Cuenta_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_host')->textInput() ?>

    <?= $form->field($model, 'Move_Credit_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_Cash_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_Debit_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_Check_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_Stamp_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_wic_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Money_Conv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_Gift_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'move_onaccount_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_CRNOTE_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'move_tip_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grat_cc_tip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'move_Delivery_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_amount_Tender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Credit_tip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_cashier')->textInput() ?>

    <?= $form->field($model, 'Tax_Exempt')->textInput() ?>

    <?= $form->field($model, 'Move_preClose_ID')->textInput() ?>

    <?= $form->field($model, 'Move_Close')->textInput() ?>

    <?= $form->field($model, 'Move_Close_ID')->textInput() ?>

    <?= $form->field($model, 'Move_refer')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Dine_type')->textInput() ?>

    <?= $form->field($model, 'Table_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Cust_Id')->textInput() ?>

    <?= $form->field($model, 'recipient_id')->textInput() ?>

    <?= $form->field($model, 'add_id')->textInput() ?>

    <?= $form->field($model, 'Billadd_id')->textInput() ?>

    <?= $form->field($model, 'MOD_Date')->textInput() ?>

    <?= $form->field($model, 'MOD_empl')->textInput() ?>

    <?= $form->field($model, 'Driver')->textInput() ?>

    <?= $form->field($model, 'move_people')->textInput() ?>

    <?= $form->field($model, 'ticket_id')->textInput() ?>

    <?= $form->field($model, 'Payment_id')->textInput() ?>

    <?= $form->field($model, 'Pay_inFull')->textInput() ?>

    <?= $form->field($model, 'cc_name_id')->textInput() ?>

    <?= $form->field($model, 'ITEMS_Picture')->textInput() ?>

    <?= $form->field($model, 'Docu_type_ID')->textInput() ?>

    <?= $form->field($model, 'Salestype_id')->textInput() ?>

    <?= $form->field($model, 'note_credit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EZway_order')->textInput() ?>

    <?= $form->field($model, 'Salesper_id')->textInput() ?>

    <?= $form->field($model, 'packlist_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Onaccount_tip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Customer_Picture')->textInput() ?>

    <?= $form->field($model, 'pago_id')->textInput() ?>

    <?= $form->field($model, 'sunat_sent')->textInput() ?>

    <?= $form->field($model, 'group_id')->textInput() ?>

    <?= $form->field($model, 'e_filename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e_document')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'e_documentdet')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'e_signature')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'e_approved')->textInput() ?>

    <?= $form->field($model, 'Batched')->textInput() ?>

    <?= $form->field($model, 'Updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
