
<?php
use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    
    
    
    <div class="body-content">
        
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
        <div id="chart1"></div>
        <?
        
        //var_dump($categoryNames) ;
        
        $comparation = "IT_TDetaMove.Move_Deta_price*IT_TDetaMove.Move_Deta_Q/IT_TDetaMove.Move_Deta_Q";
        //$comparation = "IT_TDetaMove.Move_Deta_Q";
        
        $sqlFOOD = "select ITEM_Description, it_tcategory.Cate_Name , sum(".$comparation .") AS quantity  from it_tdetamove inner join it_tmove on (it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID)
        inner join it_titem on (it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID) inner join it_tcategory on (it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID) where it_tmove.Move_Date
        between '2016-03-1 00:00:00' AND '2016-03-30 23:59:59' and  it_tcategory.Cate_Name = 'FOOD' group by ITEM_Description order by quantity desc limit 10";
        //
        $rawDataFOOD = Yii::$app->db->createCommand($sqlFOOD)->queryAll();
        
        $sqlBEER = "select ITEM_Description, it_tcategory.Cate_Name , sum(".$comparation .") AS quantity  from it_tdetamove inner join it_tmove on (it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID)
        inner join it_titem on (it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID) inner join it_tcategory on (it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID) where it_tmove.Move_Date
        between '2016-03-1 00:00:00' AND '2016-03-30 23:59:59' and  it_tcategory.Cate_Name = 'BEER' group by ITEM_Description order by quantity desc limit 10";
        //
        $rawDataBEER = Yii::$app->db->createCommand($sqlBEER)->queryAll();
        
        $sqlLIQUOR = "select ITEM_Description, it_tcategory.Cate_Name , sum(".$comparation .") AS quantity  from it_tdetamove inner join it_tmove on (it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID)
        inner join it_titem on (it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID) inner join it_tcategory on (it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID) where it_tmove.Move_Date
        between '2016-03-1 00:00:00' AND '2016-03-30 23:59:59' and  it_tcategory.Cate_Name = 'LIQUOR' group by ITEM_Description order by quantity desc limit 10";
        //
        $rawDataLIQUOR = Yii::$app->db->createCommand($sqlLIQUOR)->queryAll();
        
        $sqlVD = "select ITEM_Description, it_tcategory.Cate_Name , sum(".$comparation .") AS quantity  from it_tdetamove inner join it_tmove on (it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID)
        inner join it_titem on (it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID) inner join it_tcategory on (it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID) where it_tmove.Move_Date
        between '2016-03-1 00:00:00' AND '2016-03-30 23:59:59' and  it_tcategory.Cate_Name = 'Virgen Drinks' group by ITEM_Description order by quantity desc limit 10";
        //
        $rawDataVD = Yii::$app->db->createCommand($sqlVD)->queryAll();
        
        $sqlSD = "select ITEM_Description, it_tcategory.Cate_Name , sum(".$comparation .") AS quantity  from it_tdetamove inner join it_tmove on (it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID)
        inner join it_titem on (it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID) inner join it_tcategory on (it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID) where it_tmove.Move_Date
        between '2016-03-1 00:00:00' AND '2016-03-30 23:59:59' and  it_tcategory.Cate_Name = 'SOFT DRINK' group by ITEM_Description order by quantity desc limit 10";
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
        
        
        
        
        ?>
        
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
    </div>
    
</div>
</div>
</div>
