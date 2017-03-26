<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTaccotypeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-taccotype-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'AcTy_ID') ?>

    <?= $form->field($model, 'Acco_GEN_ID') ?>

    <?= $form->field($model, 'AcTy_Name') ?>

    <?= $form->field($model, 'Batched') ?>

    <?= $form->field($model, 'Updated') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
