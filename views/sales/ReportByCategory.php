<?php

use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
use yii\grid\GridView;
use yii\grid\ListView;
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
            echo yii\grid\GridView::widget([
                  'dataProvider' => $dataProvider,
                  'id' => 'kv-grid-demo',
                  
                  'pager' => ['options' => ['class'=> 'pagination pull-right']],
                  'tableOptions'=>['class'=>'table table-striped table-hover'],
                  
                  'class' => 'table-responsive noSwipe',
                  'summary'=>'',
                  'showHeader' => true,
                  
                  'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                              'label' => 'Category',
                              'attribute' => 'Cate_Name',
                        ],
                        [
                              'label' => 'Quantity',
                              'attribute' => 'contadito',
                              'format'=>['decimal',2],
                              'headerOptions' => ['style' => 'text-align:right'],
                              'contentOptions' =>['style' => 'text-align:right'],
                        ],
                        [
                              'label' => 'Total Tax',
                              'attribute' => 'grandtotaltax',
                              'format'=>['decimal',2],
                              'headerOptions' => ['style' => 'text-align:right'],
                              'contentOptions' =>['style' => 'text-align:right'],
                        ],
                        [
                              'label' => 'Subtotal',
                              'attribute' => 'subtotal',
                              'format'=>['decimal',2],
                              'headerOptions' => ['style' => 'text-align:right'],
                              'contentOptions' =>['style' => 'text-align:right'],
                        ],
                        [
                              'label' => 'Total',
                              'attribute' => 'grantotal',
                              'format'=>['decimal',2],
                              'headerOptions' => ['style' => 'text-align:right'],
                              'contentOptions' =>['style' => 'text-align:right'],
                        ],
                  ],
                  'showFooter'=>True,
                  
            ]);
            
            
            //var_dump( Yii::$app->db->createCommand("SELECT * FROM it_tuser WHERE USER_ID = 1")->queryAll());
            //echo "-------------------------------------------------------";
            //var_dump( Yii::$app->db2->createCommand("SELECT * FROM it_tuser WHERE USER_ID = 1")->queryAll());
            
            
            
            
            
            ?>
            
      </div>
</div>
