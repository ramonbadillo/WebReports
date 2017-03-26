<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTaccotype */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-taccotype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Acco_GEN_ID')->textInput() ?>

    <?= $form->field($model, 'AcTy_Name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Batched')->textInput() ?>

    <?= $form->field($model, 'Updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
