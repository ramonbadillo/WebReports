<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTaccountSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-taccount-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Acco_ID') ?>

    <?= $form->field($model, 'Acco_Type_ID') ?>

    <?= $form->field($model, 'Acco_Acty_ID') ?>

    <?= $form->field($model, 'Acco_Name') ?>

    <?= $form->field($model, 'Acco_Desc') ?>

    <?php // echo $form->field($model, 'Acco_Nro') ?>

    <?php // echo $form->field($model, 'Acco_Bala') ?>

    <?php // echo $form->field($model, 'Acco_Date') ?>

    <?php // echo $form->field($model, 'Acco_Stat') ?>

    <?php // echo $form->field($model, 'Acco_Note') ?>

    <?php // echo $form->field($model, 'account_thirdparty') ?>

    <?php // echo $form->field($model, 'Batched') ?>

    <?php // echo $form->field($model, 'Updated') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
