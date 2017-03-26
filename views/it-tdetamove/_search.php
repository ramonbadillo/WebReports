<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTdetamoveSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-tdetamove-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Move_Deta_ID') ?>

    <?= $form->field($model, 'Move_Deta_Move_ID') ?>

    <?= $form->field($model, 'Move_Deta_ITEM_ID') ?>

    <?= $form->field($model, 'Subitem_of') ?>

    <?= $form->field($model, 'Move_Deta_Q') ?>

    <?php // echo $form->field($model, 'Move_deta_UM') ?>

    <?php // echo $form->field($model, 'Move_Deta_K') ?>

    <?php // echo $form->field($model, 'Move_Deta_price') ?>

    <?php // echo $form->field($model, 'Move_Deta_Tax_Value') ?>

    <?php // echo $form->field($model, 'Move_Deta_Tax2_Value') ?>

    <?php // echo $form->field($model, 'Move_Deta_Tax3_Value') ?>

    <?php // echo $form->field($model, 'Move_REG_price') ?>

    <?php // echo $form->field($model, 'detamove_incl_tax') ?>

    <?php // echo $form->field($model, 'sold_mode') ?>

    <?php // echo $form->field($model, 'Note') ?>

    <?php // echo $form->field($model, 'Detalles') ?>

    <?php // echo $form->field($model, 'On_Sale') ?>

    <?php // echo $form->field($model, 'Item_complete') ?>

    <?php // echo $form->field($model, 'Date_complete') ?>

    <?php // echo $form->field($model, 'Order_ID') ?>

    <?php // echo $form->field($model, 'Order_Table_name') ?>

    <?php // echo $form->field($model, 'Chair_ID') ?>

    <?php // echo $form->field($model, 'order_host') ?>

    <?php // echo $form->field($model, 'man_apprid') ?>

    <?php // echo $form->field($model, 'Serial_Num') ?>

    <?php // echo $form->field($model, 'expi_date') ?>

    <?php // echo $form->field($model, 'ITEMS_Picture') ?>

    <?php // echo $form->field($model, 'rentaldays') ?>

    <?php // echo $form->field($model, 'rental') ?>

    <?php // echo $form->field($model, 'Returned_id') ?>

    <?php // echo $form->field($model, 'Stock_Room') ?>

    <?php // echo $form->field($model, 'Discount_Code') ?>

    <?php // echo $form->field($model, 'modi') ?>

    <?php // echo $form->field($model, 'Order_Regi_name') ?>

    <?php // echo $form->field($model, 'Inv_Close_ID') ?>

    <?php // echo $form->field($model, 'Move_Deta_Guia_ID') ?>

    <?php // echo $form->field($model, 'Commicost') ?>

    <?php // echo $form->field($model, 'Commipaid_id') ?>

    <?php // echo $form->field($model, 'sent_to') ?>

    <?php // echo $form->field($model, 'gift_id') ?>

    <?php // echo $form->field($model, 'Vendor_id') ?>

    <?php // echo $form->field($model, 'origi_cuentaID') ?>

    <?php // echo $form->field($model, 'Order_Time_in') ?>

    <?php // echo $form->field($model, 'Order_Item_PREFERENCE') ?>

    <?php // echo $form->field($model, 'Date_Rented') ?>

    <?php // echo $form->field($model, 'Move_Deta_Ori_Q') ?>

    <?php // echo $form->field($model, 'Batched') ?>

    <?php // echo $form->field($model, 'Updated') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
