<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTaccotypegeneralSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-taccotypegeneral-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Gen_account') ?>

    <?= $form->field($model, 'Gen_Name') ?>

    <?= $form->field($model, 'Batched') ?>

    <?= $form->field($model, 'Updated') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
