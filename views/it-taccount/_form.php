<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTaccount */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-taccount-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Acco_Type_ID')->textInput() ?>

    <?= $form->field($model, 'Acco_Acty_ID')->textInput() ?>

    <?= $form->field($model, 'Acco_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Acco_Desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Acco_Nro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Acco_Bala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Acco_Date')->textInput() ?>

    <?= $form->field($model, 'Acco_Stat')->textInput() ?>

    <?= $form->field($model, 'Acco_Note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'account_thirdparty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Batched')->textInput() ?>

    <?= $form->field($model, 'Updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
