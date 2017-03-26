<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ItTaccount */

$this->title = Yii::t('app', 'Create It Taccount');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Taccounts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-taccount-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
