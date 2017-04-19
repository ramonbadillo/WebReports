<?php

use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\grid\ListView;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\db\Query;


use yii\base\Widget;
use yii\data\Pagination;





$this->title = 'Report By Category';

?>

<div class="row">
      <div class="col-xs-12">
            <div class="panel panel-default">
                  <div class="col-xs-4">
                        Brians Reports
                  </div>
                  <div class="col-xs-8 pull-right">
                        <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                              <div class="form-group ">
                                    <label class="col-sm-2 control-label">Range Dates:</label>
                                    <div class="col-md-6">
                                          <input type="text" id="daterange1" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" class="form-control datetimerange">
                                    </div>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>


<div class="panel panel-default panel-table">
      
      <div class="panel-body">
            
            <?php
            
            $gridColumns = [
                  ['class' => 'kartik\grid\SerialColumn'],
                  [
                        'label' => 'Category',
                        'attribute' => 'Cate_Name',
                        'pageSummary'=>'Total',
                        'pageSummaryOptions' => ['style'=>'font-weight:bold;text-decoration: underline; color:black;'],
                  ],
                  [
                        'label' => 'Quantity',
                        'attribute' => 'contadito',
                        'format'=>['decimal',2],
                        'hAlign'=>'right',
                        'pageSummary' => true,
                        'pageSummaryOptions' => ['style'=>'font-weight:bold;text-decoration: underline; color:black;'],
                  ],
                  [
                        'label' => 'Total Tax',
                        'attribute' => 'grandtotaltax',
                        'format'=>['decimal',2],
                        'hAlign'=>'right',
                        'pageSummary' => true,
                        'pageSummaryOptions' => ['style'=>'font-weight:bold;text-decoration: underline; color:black;'],
                  ],
                  [
                        'label' => 'Subtotal',
                        'attribute' => 'subtotal',
                        'format'=>['decimal',2],
                        'hAlign'=>'right',
                        'pageSummary' => true,
                        'pageSummaryOptions' => ['style'=>'font-weight:bold;text-decoration: underline; color:black;'],
                  ],
                  [
                        'label' => 'Total',
                        'attribute' => 'grantotal',
                        'format'=>['decimal',2],
                        'hAlign'=>'right',
                        'pageSummary' => true,
                        'pageSummaryOptions' => ['style'=>'font-weight:bold;text-decoration: underline; color:black;'],
                  ],
                  // [
                  //       'attribute'=>'Capturista',
                  //       'value'=>'nombreUsr',
                  //       'width'=>'100px',
                  //
                  // ],
                  //
                  // [
                  //       'width'=>'100px',
                  //       'pageSummary'=>true
                  // ],
                  //['class' => 'kartik\grid\ActionColumn', 'urlCreator'=>function(){return '#';}]
            ];
            $fullExportMenu = ExportMenu::widget([
                  'dataProvider' => $dataProvider,
                  'columns' => $gridColumns,
                  'target' => ExportMenu::TARGET_BLANK,
                  'fontAwesome' => true,
                  'pjaxContainerId' => 'kv-pjax-container',
                  'exportConfig'=> [
                        ExportMenu::FORMAT_HTML=>false,
                        ExportMenu::FORMAT_CSV=>false,
                        ExportMenu::FORMAT_TEXT=>false,
                        ExportMenu::FORMAT_PDF=>false,
                        
                  ],
                  'dropdownOptions' => [
                        'label' => 'Exportar',
                        'class' => 'btn btn-default',
                        'itemsBefore' => [
                              '<li class="dropdown-header">Exportar todos los datos</li>',
                        ],
                  ],
            ]);
            echo GridView::widget([
                  'dataProvider' => $dataProvider,
                  'columns' => $gridColumns,
                  'pjax' => true,
                  'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
                  'showPageSummary'=>true,
                  'panel' => [
                        // /'type' => GridView::TYPE_SUCCESS,
                        'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Report By Category</h3>',
                        'footer' => false,
                  ],
                  // set a label for default menu
                  // 'export' => [
                  //     'label' => 'Page',
                  //     'fontAwesome' => true,
                  // ],
                  // your toolbar can include the additional full export menu
                  'toolbar' => [
                        //  '{export}',
                        $fullExportMenu,
                  ],
                  'id' => 'kv-grid-demo',
                  
                  //'pager' => ['options' => ['class'=> 'pagination pull-right']],
                  //'tableOptions'=>['class'=>'table table-striped table-hover'],
                  
                  'class' => 'table-responsive noSwipe',
                  'summary'=>'',
                  'showHeader' => true,
                  
                  
                  'showFooter'=>False,
                  
                  'showPageSummary' => true,
                  
            ]);
            
            
            //var_dump( Yii::$app->db->createCommand("SELECT * FROM it_tuser WHERE USER_ID = 1")->queryAll());
            //echo "-------------------------------------------------------";
            //var_dump( Yii::$app->db2->createCommand("SELECT * FROM it_tuser WHERE USER_ID = 1")->queryAll());
            
            
            
            
            
            ?>
            
      </div>
</div>
