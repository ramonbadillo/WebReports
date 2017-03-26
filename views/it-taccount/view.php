<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ItTaccount */

$this->title = $model->Acco_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Taccounts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-taccount-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->Acco_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->Acco_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Acco_ID',
            'Acco_Type_ID',
            'Acco_Acty_ID',
            'Acco_Name',
            'Acco_Desc',
            'Acco_Nro',
            'Acco_Bala',
            'Acco_Date',
            'Acco_Stat',
            'Acco_Note:ntext',
            'account_thirdparty',
            'Batched',
            'Updated',
        ],
    ]) ?>

</div>
