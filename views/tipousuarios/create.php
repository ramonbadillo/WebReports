<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipousuarios */

$this->title = Yii::t('app', 'Create Tipousuarios');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipousuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipousuarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
