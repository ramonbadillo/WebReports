<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItTcategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'It Tcategories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-tcategory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create It Tcategory'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Cate_ID',
            'Cate_Name:ntext',
            'TAXPERC',
            'TAXPERC2',
            'TAXPERC3',
            // 'ID_RQD',
            // 'Age_LMT',
            // 'TAXPERCCOST',
            // 'cate_concess',
            // 'Priority',
            // 'Batched',
            // 'Updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
