<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItTaccotype */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'It Taccotype',
]) . $model->AcTy_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Taccotypes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AcTy_ID, 'url' => ['view', 'id' => $model->AcTy_ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="it-taccotype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
