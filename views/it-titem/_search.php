<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTitemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-titem-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ITEM_UID') ?>

    <?= $form->field($model, 'ITEM_ID') ?>

    <?= $form->field($model, 'ITEM_Picture') ?>

    <?= $form->field($model, 'ITEM_Description') ?>

    <?= $form->field($model, 'ITEM_Det_Description') ?>

    <?php // echo $form->field($model, 'ITEM_Screen_Name') ?>

    <?php // echo $form->field($model, 'ITEM_kitchen_Name') ?>

    <?php // echo $form->field($model, 'ITEM_kitchen_Name2') ?>

    <?php // echo $form->field($model, 'ITEM_Prefer_ID') ?>

    <?php // echo $form->field($model, 'ITEM_Unit_ID') ?>

    <?php // echo $form->field($model, 'Item_UM') ?>

    <?php // echo $form->field($model, 'ITEM_Type_ID') ?>

    <?php // echo $form->field($model, 'ITEM_Class_ID') ?>

    <?php // echo $form->field($model, 'ITEM_Sub_Class_ID') ?>

    <?php // echo $form->field($model, 'ITEM_Fam_ID') ?>

    <?php // echo $form->field($model, 'ITEM_Sub_Fam_ID') ?>

    <?php // echo $form->field($model, 'ITEM_Cate_ID') ?>

    <?php // echo $form->field($model, 'ITEM_SubC_ID') ?>

    <?php // echo $form->field($model, 'ITEM_Depa_ID') ?>

    <?php // echo $form->field($model, 'ITEM_Ubic_Pass') ?>

    <?php // echo $form->field($model, 'ITEM_Ubic_Stant') ?>

    <?php // echo $form->field($model, 'ITEM_Ubic_Col') ?>

    <?php // echo $form->field($model, 'ITEM_Ubic_Row') ?>

    <?php // echo $form->field($model, 'ITEM_Sale_Price') ?>

    <?php // echo $form->field($model, 'ITEM_Sale_Price2') ?>

    <?php // echo $form->field($model, 'ITEM_Sale_Price3') ?>

    <?php // echo $form->field($model, 'ITEM_Cost') ?>

    <?php // echo $form->field($model, 'ITEM_Account_ID') ?>

    <?php // echo $form->field($model, 'ITEM_Inco_Account_ID') ?>

    <?php // echo $form->field($model, 'ITEM_Vend_ID') ?>

    <?php // echo $form->field($model, 'ITEM_Vend_PN') ?>

    <?php // echo $form->field($model, 'ITEM_Invo_Message') ?>

    <?php // echo $form->field($model, 'ITEM_Reorder') ?>

    <?php // echo $form->field($model, 'Prioridad') ?>

    <?php // echo $form->field($model, 'ITEM_Show') ?>

    <?php // echo $form->field($model, 'Recipes') ?>

    <?php // echo $form->field($model, 'ITEM_topping_ID') ?>

    <?php // echo $form->field($model, 'Kit_red_color') ?>

    <?php // echo $form->field($model, 'item_active') ?>

    <?php // echo $form->field($model, 'Part_Inventory') ?>

    <?php // echo $form->field($model, 'item_modi_id') ?>

    <?php // echo $form->field($model, 'Beg_Balance') ?>

    <?php // echo $form->field($model, 'Show_modi') ?>

    <?php // echo $form->field($model, 'Created_date') ?>

    <?php // echo $form->field($model, 'Modify_date') ?>

    <?php // echo $form->field($model, 'Modify_by') ?>

    <?php // echo $form->field($model, 'Unit_Sub_Q') ?>

    <?php // echo $form->field($model, 'SubITEM_Unit_ID') ?>

    <?php // echo $form->field($model, 'in_stock') ?>

    <?php // echo $form->field($model, 'Reorder_Quantity') ?>

    <?php // echo $form->field($model, 'Num_Bonus_Points') ?>

    <?php // echo $form->field($model, 'RentalYES') ?>

    <?php // echo $form->field($model, 'rent_fee') ?>

    <?php // echo $form->field($model, 'EXP_Date') ?>

    <?php // echo $form->field($model, 'Last_Sold') ?>

    <?php // echo $form->field($model, 'Exclude_From_Loyalty') ?>

    <?php // echo $form->field($model, 'ITEM_ShowOnBB') ?>

    <?php // echo $form->field($model, 'opt_num_seri') ?>

    <?php // echo $form->field($model, 'warr_months') ?>

    <?php // echo $form->field($model, 'ISC_tax') ?>

    <?php // echo $form->field($model, 'Novar_costtax') ?>

    <?php // echo $form->field($model, 'Production_Item') ?>

    <?php // echo $form->field($model, 'Byportion_Item') ?>

    <?php // echo $form->field($model, 'Print_barcode') ?>

    <?php // echo $form->field($model, 'Stock_Room') ?>

    <?php // echo $form->field($model, 'item_tax1') ?>

    <?php // echo $form->field($model, 'item_tax2') ?>

    <?php // echo $form->field($model, 'item_tax3') ?>

    <?php // echo $form->field($model, 'Scr_arr_inv') ?>

    <?php // echo $form->field($model, 'invscr_noshow') ?>

    <?php // echo $form->field($model, 'Commiused') ?>

    <?php // echo $form->field($model, 'qtyspc') ?>

    <?php // echo $form->field($model, 'Stock_WebChanged') ?>

    <?php // echo $form->field($model, 'ITEM_Show_Web') ?>

    <?php // echo $form->field($model, 'line_discount') ?>

    <?php // echo $form->field($model, 'open_item') ?>

    <?php // echo $form->field($model, 'Disc_item') ?>

    <?php // echo $form->field($model, 'AndroidSyncs') ?>

    <?php // echo $form->field($model, 'mod_online') ?>

    <?php // echo $form->field($model, 'Ticket_disc') ?>

    <?php // echo $form->field($model, 'perish_price') ?>

    <?php // echo $form->field($model, 'ITEM_LOCAL_ID') ?>

    <?php // echo $form->field($model, 'item_game_duration') ?>

    <?php // echo $form->field($model, 'Item_TARE') ?>

    <?php // echo $form->field($model, 'show_pic') ?>

    <?php // echo $form->field($model, 'Batched') ?>

    <?php // echo $form->field($model, 'Updated') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
