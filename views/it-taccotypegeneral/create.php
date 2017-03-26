<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ItTaccotypegeneral */

$this->title = Yii::t('app', 'Create It Taccotypegeneral');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Taccotypegenerals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-taccotypegeneral-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
