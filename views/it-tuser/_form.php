<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTuser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-tuser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'USER_Login')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'USER_Pass')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'USER_Pass_alt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'USER_Date')->textInput() ?>

    <?= $form->field($model, 'USER_Expr_Date')->textInput() ?>

    <?= $form->field($model, 'USER_Roll_ID')->textInput() ?>

    <?= $form->field($model, 'USER_Cust_ID')->textInput() ?>

    <?= $form->field($model, 'USER_Loca_ID')->textInput() ?>

    <?= $form->field($model, 'USER_Empl_ID')->textInput() ?>

    <?= $form->field($model, 'Regi_Code')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'UserON')->textInput() ?>

    <?= $form->field($model, 'EMPL_ID')->textInput() ?>

    <?= $form->field($model, 'grouping_id')->textInput() ?>

    <?= $form->field($model, 'Batched')->textInput() ?>

    <?= $form->field($model, 'Updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
