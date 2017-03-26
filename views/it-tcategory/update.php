<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItTcategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'It Tcategory',
]) . $model->Cate_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Tcategories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Cate_ID, 'url' => ['view', 'id' => $model->Cate_ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="it-tcategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
