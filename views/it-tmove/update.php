<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItTmove */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'It Tmove',
]) . $model->Move_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Tmoves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Move_ID, 'url' => ['view', 'id' => $model->Move_ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="it-tmove-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
