<?php
use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
use yii\web\JsExpression;
?>
<div class="row">
      <div class="col-md-12">
            <div class="widget widget-fullwidth be-loading">
                  
                  <div class="widget-chart-container">
                        <?php
                        
                        
                        // echo '===';
                        // var_dump(gmdate('Y-m-d H:i:s',strtotime('2015-06-03 06:16:28')));
                        // var_dump(strtotime('2015-06-10 06:16:28'));
                        // var_dump( strtotime('2015-06-02 06:16:28'." UTC"));
                        //die();
                        
                        
                        echo Highcharts::widget([
                              'options' => [
                                    'title' => ['text' => 'Sales this month'],
                                    'xAxis' => [
                                          'type' => 'datetime',
                                          'dateTimeLabelFormats' => [
                                                'month' => '%e. %b',
                                                'year' => '%b'
                                          ],
                                          'title' => [
                                                'text' => 'Date',
                                          ],
                                    ],
                                    'yAxis' => [
                                          ['title' => 'Sells'],
                                          'min' => 0,
                                    ],
                                    
                                    'series' => [
                                          [
                                                'name' => 'Sells',
                                                'pointStart'=> strtotime('2015-06-02 06:16:28'." UTC"),
                                                'pointInterval'=> 24 * 3600 * 1000, // one day
                                                'data' => [
                                                      29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4
                                                ],
                                          ],
                                    ],
                              ],
                              
                        ]);
                        ?>
                  </div>
                  
            </div>
      </div>
</div>

<div class="row">
      <div class="col-xs-12 col-md-4">
            <div class="widget be-loading">
                  
                  <?php
                  echo Highcharts::widget([
                        'scripts' => [
                              'modules/exporting',
                              'themes/grid-light',
                        ],
                        'options' => [
                              'title' => ['text' => 'Categorys'],
                              'chart' => ['type' => 'column'],
                              'series' => [
                                    
                                    'name' => 'Total consumption',
                                    'colorByPoint' => true,
                                    'data' => [
                                          ['name' => 'Jane','y' => 13],
                                          ['name' => 'John','y' => 23],
                                          ['name' => 'Joe', 'y' => 19 ],
                                    ],
                                    'center' => [100, 80],
                                    'size' => 100,
                                    'showInLegend' => false,
                                    'dataLabels' => [
                                          'enabled' => false,
                                    ],
                              ],
                        ],
                        
                  ]);
                  ?>
                  
            </div>
      </div>
      <div class="col-xs-12 col-md-4">
            <div class="panel panel-default panel-table">
                  <div class="panel-heading">
                        <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
                        <div class="title">Movements</div>
                  </div>
                  <div class="panel-body table-responsive">
                        <table class="table table-striped table-borderless">
                              <thead>
                                    <tr>
                                          <th style="width:40%;">Product</th>
                                          <th class="number"style="width:20%;">Price</th>
                                    </tr>
                              </thead>
                              <tbody class="no-border-x">
                                    <tr>
                                          <td>Cash</td>
                                          <td class="number">$1412139</td>
                                    </tr>
                                    <tr>
                                          <td>Credit Cards</td>
                                          <td class="number">$535</td>
                                    </tr>
                                    <tr>
                                          <td>Checks</td>
                                          <td class="number">$583</td>
                                    </tr>
                                    <tr>
                                          <td>Gift Cards</td>
                                          <td class="number">$350</td>
                                    </tr>
                                    <tr>
                                          <td>Other</td>
                                          <td class="number">$495</td>
                                    </tr>
                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
      
      <div class="col-xs-12 col-md-4">
            <div class="panel panel-default panel-table">
                  <div class="panel-heading">
                        <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
                        <div class="title">Locations</div>
                  </div>
                  <div class="panel-body table-responsive">
                        <table class="table table-striped table-hover">
                              <thead>
                                    <tr>
                                          <th>Name</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                          
                                          <td class="user-avatar"> <i class="mdi mdi-balance"></i> Location 1</td>
                                          
                                    </tr>
                                    <tr>
                                          <td class="user-avatar"> <i class="mdi mdi-balance"></i> Location 2</td>
                                          
                                    </tr>
                                    <tr>
                                          <td class="user-avatar"> <i class="mdi mdi-balance"></i> Location 3</td>
                                          
                                    </tr>
                                    <tr>
                                          <td class="user-avatar"> <i class="mdi mdi-balance"></i> Location 4</td>
                                          
                                    </tr>
                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
</div>
