<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItTaccountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'It Taccounts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-taccount-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create It Taccount'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Acco_ID',
            'Acco_Type_ID',
            'Acco_Acty_ID',
            'Acco_Name',
            'Acco_Desc',
            // 'Acco_Nro',
            // 'Acco_Bala',
            // 'Acco_Date',
            // 'Acco_Stat',
            // 'Acco_Note:ntext',
            // 'account_thirdparty',
            // 'Batched',
            // 'Updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
