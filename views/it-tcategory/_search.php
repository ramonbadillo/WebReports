<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItTcategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="it-tcategory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Cate_ID') ?>

    <?= $form->field($model, 'Cate_Name') ?>

    <?= $form->field($model, 'TAXPERC') ?>

    <?= $form->field($model, 'TAXPERC2') ?>

    <?= $form->field($model, 'TAXPERC3') ?>

    <?php // echo $form->field($model, 'ID_RQD') ?>

    <?php // echo $form->field($model, 'Age_LMT') ?>

    <?php // echo $form->field($model, 'TAXPERCCOST') ?>

    <?php // echo $form->field($model, 'cate_concess') ?>

    <?php // echo $form->field($model, 'Priority') ?>

    <?php // echo $form->field($model, 'Batched') ?>

    <?php // echo $form->field($model, 'Updated') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
