<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItTitem */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'It Titem',
]) . $model->ITEM_UID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Titems'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ITEM_UID, 'url' => ['view', 'id' => $model->ITEM_UID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="it-titem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
