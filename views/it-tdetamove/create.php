<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ItTdetamove */

$this->title = Yii::t('app', 'Create It Tdetamove');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Tdetamoves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-tdetamove-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
