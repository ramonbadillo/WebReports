<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTuserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-tuser-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'USER_ID') ?>

    <?= $form->field($model, 'USER_Login') ?>

    <?= $form->field($model, 'USER_Pass') ?>

    <?= $form->field($model, 'USER_Pass_alt') ?>

    <?= $form->field($model, 'USER_Date') ?>

    <?php // echo $form->field($model, 'USER_Expr_Date') ?>

    <?php // echo $form->field($model, 'USER_Roll_ID') ?>

    <?php // echo $form->field($model, 'USER_Cust_ID') ?>

    <?php // echo $form->field($model, 'USER_Loca_ID') ?>

    <?php // echo $form->field($model, 'USER_Empl_ID') ?>

    <?php // echo $form->field($model, 'Regi_Code') ?>

    <?php // echo $form->field($model, 'UserON') ?>

    <?php // echo $form->field($model, 'EMPL_ID') ?>

    <?php // echo $form->field($model, 'grouping_id') ?>

    <?php // echo $form->field($model, 'Batched') ?>

    <?php // echo $form->field($model, 'Updated') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
