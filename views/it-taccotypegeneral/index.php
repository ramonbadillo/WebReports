<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItTaccotypegeneralSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'It Taccotypegenerals');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-taccotypegeneral-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create It Taccotypegeneral'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Gen_account',
            'Gen_Name:ntext',
            'Batched',
            'Updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
