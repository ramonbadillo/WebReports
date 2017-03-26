<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItTaccotypegeneral */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'It Taccotypegeneral',
]) . $model->Gen_account;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Taccotypegenerals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Gen_account, 'url' => ['view', 'id' => $model->Gen_account]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="it-taccotypegeneral-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
