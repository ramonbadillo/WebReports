<?php

namespace app\controllers;

use Yii;

use app\models\ItTdetamoveSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;



date_default_timezone_set('America/Mexico_City');


class SalesController extends Controller
{
      /**
      * @inheritdoc
      */
      public function behaviors()
      {
            return [
                  
                  'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                              //'logout' => ['post'],
                        ],
                  ],
            ];
      }
      
      /**
      * @inheritdoc
      */
      public function actions()
      {
            return [
                  'error' => [
                        'class' => 'yii\web\ErrorAction',
                  ],
                  
            ];
      }
      
      public function actionCategory() {
            $dataGraph = [];
            
            if (isset($_GET['startDate'])) {
                  $endDate = $_GET['endDate'];
            } else {
                  $startDate = "2015-05-01 00:00:00";
                  //$startDate = new \DateTime("first day of this month");
                  //$startDate =  $startDate->format('Y-m-d H:i:s');
            }
            if (isset($_GET['endDate'])) {
                  $endDate = $_GET['endDate'];
            } else {
                  $endDate = "2016-05-31 00:00:00";
                  //$endDate = new \DateTime("last day of this month");
                  //$endDate =  $endDate->format('Y-m-d H:i:s');
            }
            
            $searchModel = new ItTdetamoveSearch();
            $dataProvider = $searchModel->getReportByCategory($startDate,$endDate);
            
            // get the user records in the current page
            $models = $dataProvider->getModels();
            $dataX = [];
            $dataValue = [];
            foreach ($models as $key => $value) {
                  array_push($dataX, $value['Cate_Name']);
                  array_push(
                        $dataValue,
                        [
                              'name' => $value['Cate_Name'],
                              'data' => [ (int) $value['grantotal'] ]
                        ]
                  );
            }
            //  echo '<pre>';
            //print_r($dataValue);
            //  echo '<br>';
            // die();
            
            return $this->render(
                  'ReportByCategory',
                  array(
                        'dataProvider' => $dataProvider,
                        'dataX' => $dataX,
                        'dataValue' => $dataValue
                  )
            );
            
            
      }
      
      
      public function actionClass(){
            $startDate = "2015-05-01 00:00:00";
            $endDate = "2015-05-31 00:00:00";
            $searchModel = new ItTdetamoveSearch();
            $dataProvider = $searchModel->getReportByClass($startDate,$endDate);
            
            return $this->render(
                  'ReportByClass',
                  array(
                        'dataProvider' => $dataProvider,
                        
                  )
            );
      }
      
      public function actionDeparment(){
            
            
            return $this->render(
                  'ReportByDeparment'
            );
      }
      
      public function actionFamily(){
            
            return $this->render(
                  'ReportByFamily'
            );
      }
      
      public function actionSubfamily(){
            
            return $this->render(
                  'ReportBySubfamily'
            );
      }
      
      public function actionSubcategory(){
            
            return $this->render(
                  'ReportBySubcategory'
            );
      }
      
      public function actionEmployee(){
            
            return $this->render(
                  'ReportByEmployee'
            );
      }
      
      
      /**
      * Displays homepage.
      *
      * @return string
      */
      public function actionIndex()
      {
            $month_ini = new \DateTime("first day of this month");
            $month_end = new \DateTime("last day of this month");
            
            //echo $month_ini->format('Y-m-d H:i:s'); // 2012-02-01
            //echo $month_end->format('Y-m-d H:i:s'); // 2012-02-29
            
            
            
            
            //die();
            $startDate = $request->get('start',"2016-01-01 00:00:00");
            $endDate = $request->get('end',"2016-05-31 00:00:00");
            
            $searchModel = new ItTdetamoveQuery();
            $dataProvider = $searchModel->getReportByCategory($startDate,$endDate);
            
            return $this->render('index3');
            
            
      }
      
}
