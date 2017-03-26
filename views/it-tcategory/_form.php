<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-tcategory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Cate_Name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'TAXPERC')->textInput() ?>

    <?= $form->field($model, 'TAXPERC2')->textInput() ?>

    <?= $form->field($model, 'TAXPERC3')->textInput() ?>

    <?= $form->field($model, 'ID_RQD')->textInput() ?>

    <?= $form->field($model, 'Age_LMT')->textInput() ?>

    <?= $form->field($model, 'TAXPERCCOST')->textInput() ?>

    <?= $form->field($model, 'cate_concess')->textInput() ?>

    <?= $form->field($model, 'Priority')->textInput() ?>

    <?= $form->field($model, 'Batched')->textInput() ?>

    <?= $form->field($model, 'Updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
