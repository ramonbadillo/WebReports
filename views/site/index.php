
<?php
use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\db\Query;
/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">Reportes por Categorias
                
            </div>
            <div class="panel-body">
                <div id="table1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div style="display: none">
                        <?php
                        echo Highcharts::widget([
                            'scripts' => [
                                'highcharts-more', // enables supplementary chart types (gauge, arearange, columnrange, etc.)
                                //'modules/exporting', // adds Exporting button/menu to chart
                                //'themes/grid',       // applies global 'grid' theme to all charts
                                //'highcharts-3d',
                                'modules/drilldown'
                            ]
                        ]);
                        ?>
                    </div>
                    <div class="row be-datatable-header">
                        <div class="col-sm-6">
                            <div class="dataTables_length" id="table1_length">
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="row be-datatable-body">
                        <div class="col-sm-12">
                            <div id="chart1"></div>
                            <?
                            
                            //var_dump($categoryNames) ;
                            
                            $comparation = "IT_TDetaMove.Move_Deta_price*IT_TDetaMove.Move_Deta_Q/IT_TDetaMove.Move_Deta_Q";
                            //$comparation = "IT_TDetaMove.Move_Deta_Q";
                            
                            $sqlFOOD = "select ITEM_Description, it_tcategory.Cate_Name , sum(".$comparation .") AS quantity  from it_tdetamove inner join it_tmove on (it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID)
                            inner join it_titem on (it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID) inner join it_tcategory on (it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID) where it_tmove.Move_Date
                            between '2016-03-1 00:00:00' AND '2016-03-30 23:59:59' and  it_tcategory.Cate_Name = 'FOOD' group by ITEM_Description order by quantity desc limit 20";
                            //
                            $rawDataFOOD = Yii::$app->db->createCommand($sqlFOOD)->queryAll();
                            
                            $sqlBEER = "select ITEM_Description, it_tcategory.Cate_Name , sum(".$comparation .") AS quantity  from it_tdetamove inner join it_tmove on (it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID)
                            inner join it_titem on (it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID) inner join it_tcategory on (it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID) where it_tmove.Move_Date
                            between '2016-03-1 00:00:00' AND '2016-03-30 23:59:59' and  it_tcategory.Cate_Name = 'BEER' group by ITEM_Description order by quantity desc limit 20";
                            //
                            $rawDataBEER = Yii::$app->db->createCommand($sqlBEER)->queryAll();
                            
                            $sqlLIQUOR = "select ITEM_Description, it_tcategory.Cate_Name , sum(".$comparation .") AS quantity  from it_tdetamove inner join it_tmove on (it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID)
                            inner join it_titem on (it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID) inner join it_tcategory on (it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID) where it_tmove.Move_Date
                            between '2016-03-1 00:00:00' AND '2016-03-30 23:59:59' and  it_tcategory.Cate_Name = 'LIQUOR' group by ITEM_Description order by quantity desc limit 20";
                            //
                            $rawDataLIQUOR = Yii::$app->db->createCommand($sqlLIQUOR)->queryAll();
                            
                            $sqlVD = "select ITEM_Description, it_tcategory.Cate_Name , sum(".$comparation .") AS quantity  from it_tdetamove inner join it_tmove on (it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID)
                            inner join it_titem on (it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID) inner join it_tcategory on (it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID) where it_tmove.Move_Date
                            between '2016-03-1 00:00:00' AND '2016-03-30 23:59:59' and  it_tcategory.Cate_Name = 'Virgen Drinks' group by ITEM_Description order by quantity desc limit 20";
                            //
                            $rawDataVD = Yii::$app->db->createCommand($sqlVD)->queryAll();
                            
                            $sqlSD = "select ITEM_Description, it_tcategory.Cate_Name , sum(".$comparation .") AS quantity  from it_tdetamove inner join it_tmove on (it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID)
                            inner join it_titem on (it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID) inner join it_tcategory on (it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID) where it_tmove.Move_Date
                            between '2016-03-1 00:00:00' AND '2016-03-30 23:59:59' and  it_tcategory.Cate_Name = 'SOFT DRINK' group by ITEM_Description order by quantity desc limit 20";
                            //
                            $rawDataSD = Yii::$app->db->createCommand($sqlSD)->queryAll();
                            
                            $sql = "select it_tcategory.Cate_Name, SUM(".$comparation .") AS quantity FROM it_tdetamove INNER JOIN it_tmove ON (it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID)
                            INNER JOIN it_titem ON (it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID) INNER JOIN it_tcategory ON (it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID) WHERE it_tmove.Move_Date
                            BETWEEN '2016-03-19 00:00:00' AND '2017-03-19 23:59:59' GROUP BY Cate_Name ORDER BY quantity DESC";
                            //
                            $rawData = Yii::$app->db->createCommand($sql)->queryAll();
                            
                            foreach ($rawDataFOOD as $data) {
                                $dataFOOD[] = [
                                    'name' => $data['ITEM_Description'],
                                    'y' => (int)$data['quantity']*1
                                ];
                            }
                            foreach ($rawDataBEER as $data) {
                                $dataBEER[] = [
                                    'name' => $data['ITEM_Description'],
                                    'y' => (int)$data['quantity']*1
                                ];
                            }
                            foreach ($rawDataLIQUOR as $data) {
                                $dataSOFT[] = [
                                    'name' => $data['ITEM_Description'],
                                    'y' => (int)$data['quantity']*1
                                ];
                            }
                            foreach ($rawDataVD as $data) {
                                $dataVD[] = [
                                    'name' => $data['ITEM_Description'],
                                    'y' => (int)$data['quantity']*1
                                ];
                            }
                            foreach ($rawDataSD as $data) {
                                $dataSD[] = [
                                    'name' => $data['ITEM_Description'],
                                    'y' => (int)$data['quantity']*1
                                ];
                            }
                            
                            $sub_data = [];
                            
                            $sub_data[] = [
                                'id' => 'LIQUOR',
                                'name' => 'LIQUOR',
                                'data' =>$dataSOFT
                            ];
                            $sub_data[] = [
                                'id' => 'FOOD',
                                'name' => 'FOOD',
                                'data' =>$dataFOOD
                            ];
                            $sub_data[] = [
                                'id' => 'BEER',
                                'name' => 'BEER',
                                'data' =>$dataBEER
                            ];
                            $sub_data[] = [
                                'id' => 'Virgen Drinks',
                                'name' => 'Virgen Drinks',
                                'data' =>$dataVD
                            ];
                            $sub_data[] = [
                                'id' => 'SOFT DRINK',
                                'name' => 'SOFT DRINK',
                                'data' =>$dataBEER
                            ];
                            
                            $sub = json_encode($sub_data);
                            
                            //
                            
                            // AMORCITO!!!
                            // jeje
                            // yii\base\ErrorException
                            // :S
                            /*
                            Yii::app()->db->createCommand()
                            ->select('u.*')
                            ->from('user u')
                            ->where('u.role_id = :role_id', array(':role_id' => '1'))
                            ->queryAll();
                            */
                            //>createCommand($sql)->queryAll(true, array(':id' => $id));
                            
                            
                            //$test1 = $rawData->
                            
                            
                            //$input = array(4, "4", "3", 4, 3, "3");
                            //$result = array_unique($input);
                            //var_dump($rawData['Cate_Name']);
                            //echo array_values($rawData)[0]['Cate_Name'];
                            foreach ($rawData as $data) {
                                
                                $main_data[] = [
                                    'name' => $data['Cate_Name'],
                                    'y' => (int)$data['quantity']*1,
                                    'drilldown' => $data['Cate_Name']
                                ];
                                
                                // var_dump($data);
                                // echo '<br>';
                            }
                            
                            //$result = array_unique($main_data);
                            //var_dump($result);
                            $main = json_encode($main_data);
                            //var_dump($main) ;
                            // $dataProvider = new ActiveDataProvider([
                            //     $rawData,
                            // ]);
                            //  GridView::widget([
                            //     'dataProvider' => $dataProvider,
                            //     'columns' => [
                            //         'Cate_Name',
                            //         'quantity',
                            //
                            //     ],
                            // ]);
                            
                            setlocale(LC_MONETARY, 'en_US');
                            //echo money_format('%i', $number) . "\n";
                            ?>
                            
                            <div id="chart1"></div>
                            
                            
                            <table id="table1" class="table table-striped table-hover table-fw-widget dataTable no-footer" role="grid" aria-describedby="table1_info">
                                <thead>
                                    <tr role="row">
                                        
                                        <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" >Category Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" >Quantity</th></tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Example</td>
                                            <td>$123.00</td>
                                        </tr>
                                        
                                        <?php foreach ($rawData as $category):?>
                                            
                                            <td class="sorting_1">
                                                <?= Html::encode("{$category['Cate_Name']}") ?>
                                            </td>
                                            <td>
                                                <?=
                                                $moneyString = '$' . number_format($category['quantity'],2);
                                                Html::encode("{$moneyString}");
                                                ?>
                                            </td>
                                            
                                        </tr>
                                    <?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <div class="row be-datatable-footer">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="table1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="table1_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous disabled" id="table1_previous"><a href="#" aria-controls="table1" data-dt-idx="0" tabindex="0">Previous</a></li>
                                    <li class="paginate_button active"><a href="#" aria-controls="table1" data-dt-idx="1" tabindex="0">1</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="2" tabindex="0">2</a>
                                    </li><li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="3" tabindex="0">3</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="4" tabindex="0">4</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="5" tabindex="0">5</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="6" tabindex="0">6</a></li>
                                    <li class="paginate_button next" id="table1_next"><a href="#" aria-controls="table1" data-dt-idx="7" tabindex="0">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
$this->registerJs("$(function () {
    $('#chart1').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'hola'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: '<b>sabe</b>'
            },
        },
        legend: {
            enabled: true
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true
                }
            }
        },
        series: [
            {
                name: 'algo',
                colorByPoint: true,
                data:$main
                
            }
        ],
        drilldown: {
            series:$sub
            
        }
        
    });
});", yii\web\View::POS_END);
?>
