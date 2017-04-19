<?php

use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\db\Query;


use yii\base\Widget;
use yii\data\Pagination;





$this->title = 'Brians Query';
?>

<div class="panel panel-default panel-table">
      
      <div class="panel-heading">Brians Reports
            
      </div>
      <div class="panel-body">
            
            <?php
            
            
            // Generate a bootstrap responsive striped table with row highlighted on hover
            echo GridView::widget([
                  'dataProvider'=> $dataProvider,
                  'filterModel' => $searchModel,
                  'columns' => $gridColumns,
                  'responsive'=>true,
                  'hover'=>true
            ]);
            
            
            
            
            ?>
            
      </div>
</div>
