<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItTuser */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'It Tuser',
]) . $model->USER_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Tusers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->USER_ID, 'url' => ['view', 'id' => $model->USER_ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="it-tuser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
