<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItTuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'It Tusers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-tuser-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create It Tuser'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'USER_ID',
            'USER_Login:ntext',
            'USER_Pass:ntext',
            'USER_Pass_alt:ntext',
            'USER_Date',
            // 'USER_Expr_Date',
            // 'USER_Roll_ID',
            // 'USER_Cust_ID',
            // 'USER_Loca_ID',
            // 'USER_Empl_ID',
            // 'Regi_Code:ntext',
            // 'UserON',
            // 'EMPL_ID',
            // 'grouping_id',
            // 'Batched',
            // 'Updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
