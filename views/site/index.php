
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
foreach ($rawData as $data) {
    $main_data[] = [
        'name' => $data['Cate_Name'],
        'y' => (int)$data['quantity']*1,
        'drilldown' => $data['Cate_Name']
    ];
}
$main = json_encode($main_data);
setlocale(LC_MONETARY, 'en_US');
?>

<!--Date Range picker-->
<div class="row">
    
    <div class="col-md-12">
        
        <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading panel-heading-divider">Reportes por Categorias
                <span class="panel-subtitle">
                    <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                        <div class="form-group ">
                            <label class="col-sm-3 control-label">Range Dates</label>
                            <div class="col-md-4">
                                <input type="text" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" class="form-control datetimerange">
                            </div>
                        </div>
                    </form>
                </span>
            </div>
            
            <div class="panel-body">
                <div id="chart1"></div>
                
                <table id="table1" class="table table-striped table-hover table-fw-widget dataTable no-footer" role="grid" aria-describedby="table1_info">
                    <thead>
                        <tr role="row">
                            
                            <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" >Category Name</th>
                            <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" >Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                        
                        <?php foreach ($rawData as $category):?>
                            <tr class="gradeA odd" role="row">
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
    </div>
</div>


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




<?php
$this->registerJs("$(function () {
    $('#chart1').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: '<b>Categorys</b>'
            },
        },
        legend: {
            enabled: false
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
                name: 'categorys',
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
