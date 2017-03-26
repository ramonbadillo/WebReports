<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTitem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-titem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ITEM_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_Picture')->textInput() ?>

    <?= $form->field($model, 'ITEM_Description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_Det_Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ITEM_Screen_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_kitchen_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_kitchen_Name2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_Prefer_ID')->textInput() ?>

    <?= $form->field($model, 'ITEM_Unit_ID')->textInput() ?>

    <?= $form->field($model, 'Item_UM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_Type_ID')->textInput() ?>

    <?= $form->field($model, 'ITEM_Class_ID')->textInput() ?>

    <?= $form->field($model, 'ITEM_Sub_Class_ID')->textInput() ?>

    <?= $form->field($model, 'ITEM_Fam_ID')->textInput() ?>

    <?= $form->field($model, 'ITEM_Sub_Fam_ID')->textInput() ?>

    <?= $form->field($model, 'ITEM_Cate_ID')->textInput() ?>

    <?= $form->field($model, 'ITEM_SubC_ID')->textInput() ?>

    <?= $form->field($model, 'ITEM_Depa_ID')->textInput() ?>

    <?= $form->field($model, 'ITEM_Ubic_Pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_Ubic_Stant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_Ubic_Col')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_Ubic_Row')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_Sale_Price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_Sale_Price2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_Sale_Price3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_Cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_Account_ID')->textInput() ?>

    <?= $form->field($model, 'ITEM_Inco_Account_ID')->textInput() ?>

    <?= $form->field($model, 'ITEM_Vend_ID')->textInput() ?>

    <?= $form->field($model, 'ITEM_Vend_PN')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ITEM_Invo_Message')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ITEM_Reorder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Prioridad')->textInput() ?>

    <?= $form->field($model, 'ITEM_Show')->textInput() ?>

    <?= $form->field($model, 'Recipes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ITEM_topping_ID')->textInput() ?>

    <?= $form->field($model, 'Kit_red_color')->textInput() ?>

    <?= $form->field($model, 'item_active')->textInput() ?>

    <?= $form->field($model, 'Part_Inventory')->textInput() ?>

    <?= $form->field($model, 'item_modi_id')->textInput() ?>

    <?= $form->field($model, 'Beg_Balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Show_modi')->textInput() ?>

    <?= $form->field($model, 'Created_date')->textInput() ?>

    <?= $form->field($model, 'Modify_date')->textInput() ?>

    <?= $form->field($model, 'Modify_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Unit_Sub_Q')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SubITEM_Unit_ID')->textInput() ?>

    <?= $form->field($model, 'in_stock')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Reorder_Quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Num_Bonus_Points')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RentalYES')->textInput() ?>

    <?= $form->field($model, 'rent_fee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EXP_Date')->textInput() ?>

    <?= $form->field($model, 'Last_Sold')->textInput() ?>

    <?= $form->field($model, 'Exclude_From_Loyalty')->textInput() ?>

    <?= $form->field($model, 'ITEM_ShowOnBB')->textInput() ?>

    <?= $form->field($model, 'opt_num_seri')->textInput() ?>

    <?= $form->field($model, 'warr_months')->textInput() ?>

    <?= $form->field($model, 'ISC_tax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Novar_costtax')->textInput() ?>

    <?= $form->field($model, 'Production_Item')->textInput() ?>

    <?= $form->field($model, 'Byportion_Item')->textInput() ?>

    <?= $form->field($model, 'Print_barcode')->textInput() ?>

    <?= $form->field($model, 'Stock_Room')->textInput() ?>

    <?= $form->field($model, 'item_tax1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_tax2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_tax3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Scr_arr_inv')->textInput() ?>

    <?= $form->field($model, 'invscr_noshow')->textInput() ?>

    <?= $form->field($model, 'Commiused')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qtyspc')->textInput() ?>

    <?= $form->field($model, 'Stock_WebChanged')->textInput() ?>

    <?= $form->field($model, 'ITEM_Show_Web')->textInput() ?>

    <?= $form->field($model, 'line_discount')->textInput() ?>

    <?= $form->field($model, 'open_item')->textInput() ?>

    <?= $form->field($model, 'Disc_item')->textInput() ?>

    <?= $form->field($model, 'AndroidSyncs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mod_online')->textInput() ?>

    <?= $form->field($model, 'Ticket_disc')->textInput() ?>

    <?= $form->field($model, 'perish_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEM_LOCAL_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_game_duration')->textInput() ?>

    <?= $form->field($model, 'Item_TARE')->textInput() ?>

    <?= $form->field($model, 'show_pic')->textInput() ?>

    <?= $form->field($model, 'Batched')->textInput() ?>

    <?= $form->field($model, 'Updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
