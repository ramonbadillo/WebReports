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





$this->title = 'Report By Class';

?>

<div class="row">
      <div class="col-md-12">
            <div class="panel panel-default">
                  
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
            
            
            
      </div>
</div>

<div class="col-sm-12">
      <div class="panel panel-default">
            <div class="panel-heading">Icon Text Tabs</div>
            <div class="tab-container">
                  <ul class="nav nav-tabs">
                        <li class="active"><a href="#home5" data-toggle="tab" aria-expanded="false"><span class="icon mdi mdi-grid"></span>Table</a></li>
                        <li class=""><a href="#profile5" data-toggle="tab" aria-expanded="false"><span class="icon mdi mdi-chart"></span>Graph</a></li>
                        <li class=""><a href="#messages5" data-toggle="tab" aria-expanded="true"><span class="icon mdi mdi-info"></span>Info</a></li>
                  </ul>
                  <div class="tab-content">
                        <div id="home5" class="tab-pane active">
                              
                              
                              <?php
                              
                              $gridColumns = [
                                    ['class' => 'kartik\grid\SerialColumn'],
                                    [
                                          'label' => 'ITEM_Description',
                                          'attribute' => 'ITEM_Description',
                                          'pageSummary'=>'Total',
                                          'pageSummaryOptions' => ['style'=>'font-weight:bold;text-decoration: underline; color:black;'],
                                    ],
                                    [
                                          'label' => 'Class_Name',
                                          'attribute' => 'Class_Name',
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
                                          'class' => 'hidden',
                                          'heading' => '',
                                          'footer' => false,
                                          'heading' => false,
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
                        <div id="profile5" class="tab-pane cont">
                              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                              <p> Consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                        </div>
                        <div id="messages5" class="tab-pane cont">
                              <p>Consectetur adipisicing elit. Ipsam ut praesentium, voluptate quidem necessitatibus quam nam officia soluta aperiam, recusandae.</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.</p><a href="#">Read more</a>
                        </div>
                  </div>
            </div>
      </div>
</div>
