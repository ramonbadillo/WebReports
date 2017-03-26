<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItTaccount */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'It Taccount',
]) . $model->Acco_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Taccounts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Acco_ID, 'url' => ['view', 'id' => $model->Acco_ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="it-taccount-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
