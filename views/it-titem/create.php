<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ItTitem */

$this->title = Yii::t('app', 'Create It Titem');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Titems'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-titem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
