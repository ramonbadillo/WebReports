<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ItTuser */

$this->title = $model->USER_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Tusers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-tuser-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->USER_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->USER_ID], [
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
            'USER_ID',
            'USER_Login:ntext',
            'USER_Pass:ntext',
            'USER_Pass_alt:ntext',
            'USER_Date',
            'USER_Expr_Date',
            'USER_Roll_ID',
            'USER_Cust_ID',
            'USER_Loca_ID',
            'USER_Empl_ID',
            'Regi_Code:ntext',
            'UserON',
            'EMPL_ID',
            'grouping_id',
            'Batched',
            'Updated',
        ],
    ]) ?>

</div>
