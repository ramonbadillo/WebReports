<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ItTmove */

$this->title = Yii::t('app', 'Create It Tmove');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Tmoves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-tmove-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
