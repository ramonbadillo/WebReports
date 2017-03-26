<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ItTuser */

$this->title = Yii::t('app', 'Create It Tuser');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Tusers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-tuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
