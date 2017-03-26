<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTdetamove */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-tdetamove-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Move_Deta_Move_ID')->textInput() ?>

    <?= $form->field($model, 'Move_Deta_ITEM_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Subitem_of')->textInput() ?>

    <?= $form->field($model, 'Move_Deta_Q')->textInput() ?>

    <?= $form->field($model, 'Move_deta_UM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_Deta_K')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_Deta_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_Deta_Tax_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_Deta_Tax2_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_Deta_Tax3_Value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Move_REG_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detamove_incl_tax')->textInput() ?>

    <?= $form->field($model, 'sold_mode')->textInput() ?>

    <?= $form->field($model, 'Note')->textInput() ?>

    <?= $form->field($model, 'Detalles')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'On_Sale')->textInput() ?>

    <?= $form->field($model, 'Item_complete')->textInput() ?>

    <?= $form->field($model, 'Date_complete')->textInput() ?>

    <?= $form->field($model, 'Order_ID')->textInput() ?>

    <?= $form->field($model, 'Order_Table_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Chair_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_host')->textInput() ?>

    <?= $form->field($model, 'man_apprid')->textInput() ?>

    <?= $form->field($model, 'Serial_Num')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'expi_date')->textInput() ?>

    <?= $form->field($model, 'ITEMS_Picture')->textInput() ?>

    <?= $form->field($model, 'rentaldays')->textInput() ?>

    <?= $form->field($model, 'rental')->textInput() ?>

    <?= $form->field($model, 'Returned_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Stock_Room')->textInput() ?>

    <?= $form->field($model, 'Discount_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modi')->textInput() ?>

    <?= $form->field($model, 'Order_Regi_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Inv_Close_ID')->textInput() ?>

    <?= $form->field($model, 'Move_Deta_Guia_ID')->textInput() ?>

    <?= $form->field($model, 'Commicost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Commipaid_id')->textInput() ?>

    <?= $form->field($model, 'sent_to')->textInput() ?>

    <?= $form->field($model, 'gift_id')->textInput() ?>

    <?= $form->field($model, 'Vendor_id')->textInput() ?>

    <?= $form->field($model, 'origi_cuentaID')->textInput() ?>

    <?= $form->field($model, 'Order_Time_in')->textInput() ?>

    <?= $form->field($model, 'Order_Item_PREFERENCE')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Date_Rented')->textInput() ?>

    <?= $form->field($model, 'Move_Deta_Ori_Q')->textInput() ?>

    <?= $form->field($model, 'Batched')->textInput() ?>

    <?= $form->field($model, 'Updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
