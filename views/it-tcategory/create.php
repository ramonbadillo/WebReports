<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ItTcategory */

$this->title = Yii::t('app', 'Create It Tcategory');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'It Tcategories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="it-tcategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
