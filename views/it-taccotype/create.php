<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ItTaccotype */

$this->title = Yii::t('app', 'Create It Taccotype');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Taccotypes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-taccotype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
