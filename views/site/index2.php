<?php
use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\db\Query;
/* @var $this yii\web\View */
$query = new Query;
$query2 = new Query;
// compose the query
$query->select('it_titem.ITEM_ID,it_titem.ITEM_Description, it_tcategory.Cate_Name, IT_TDetaMove.Move_Deta_price, SUM(IT_TDetaMove.Move_Deta_Q) AS itemQuantity,
SUM(IT_TDetaMove.Move_Deta_price * IT_TDetaMove.Move_Deta_Q + it_tdetamove.Move_Deta_Tax_Value ) AS Pprice
')
->from('it_tdetamove')
->join('INNER JOIN', 'it_tmove','it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID')
->join('INNER JOIN', 'it_titem','it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID')
->join('INNER JOIN', 'it_tcategory','it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID')
->where(['between', 'it_tmove.Move_Date', "2016-05-21", "2016-06-22" ])

->groupBy(['it_titem.ITEM_ID'])

->all();
// build and execute the query
//$this->find()->sum('amount');
//$rows = $query->all();

//var_dump($filterCategory) ;
// alternatively, you can create DB command and execute it
$command = $query->createCommand();
// $command->sql returns the actual SQL
$rows = $command->queryAll();

$query2->select('it_tcategory.Cate_Name')
->from('it_tdetamove')
->join('INNER JOIN', 'it_tmove','it_tdetamove.Move_Deta_Move_ID = it_tmove.Move_ID')
->join('INNER JOIN', 'it_titem','it_tdetamove.Move_Deta_ITEM_ID = it_titem.ITEM_ID')
->join('INNER JOIN', 'it_tcategory','it_titem.ITEM_Cate_ID = it_tcategory.Cate_ID')
->where(['between', 'it_tmove.Move_Date', "2016-05-21", "2016-06-27" ])

->distinct()->all();
$categories = $query2->createCommand()->queryAll();

?>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <?php $categoryIndex = 0;
    foreach ($categories as $category):?>
    
    
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading<?php echo $categoryIndex?>">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $categoryIndex?>" aria-expanded="false" aria-controls="collapse<?php echo $categoryIndex?>">
                    <?php
                    $categoryItems = $query->where(['Cate_Name' => $category['Cate_Name']])->all();
                    
                    $arr_new = array_sum(array_column($categoryItems, 'SUM(IT_TDetaMove.Move_Deta_Q)'));
                    $categoryItems = $query->where(['Cate_Name' => $category['Cate_Name']])->all();
                    ?>
                    <?php echo $category['Cate_Name'].' ';?>
                    <p class="text-right"><?php echo ' $' . number_format($arr_new,2);  ?></p>
                    
                </a>
            </h4>
        </div>
        <div id="collapse<?php echo $categoryIndex?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $categoryIndex?>">
            <div class="panel-body">
                
                
                
                <table id="table1" class="table table-striped table-hover table-fw-widget dataTable no-footer" role="grid" aria-describedby="table1_info">
                    <thead>
                        <tr>
                            <th style="width:10%;">Item Id</th>
                            <th style="width:50%;">Item Name</th>
                            <th class="number">Quantity</th>
                            <th class="number">Price</th>
                            
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                        <?php foreach ($categoryItems as $currentItem):?>
                            
                            <td>
                                <?= Html::encode("{$currentItem['ITEM_ID']}") ?>
                            </td>
                            <td>
                                <?= Html::encode("{$currentItem['ITEM_Description']}") ?>
                            </td>
                            <td class="number">
                                <?=
                                $quantity = number_format($currentItem['itemQuantity'],2);
                                Html::encode("{$quantity}");
                                ?>
                            </td>
                            <td class="number">
                                <?=
                                $moneyString = '$' . number_format($currentItem['Pprice'],2);
                                Html::encode("{$currentItem['Pprice']}") ?>
                            </td>
                            
                        </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        </div>
    </div>
</div>

<?php
$categoryIndex++;
endforeach; ?>
</div>
