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
      
      public function actionCategory(){
            $startDate = new \DateTime("first day of this month");
            $endDate = new \DateTime("last day of this month");
            $startDate = "2015-05-01 00:00:00";
            $endDate = "2016-05-31 00:00:00";
            
            $searchModel = new ItTdetamoveSearch();
            $dataProvider = $searchModel->getReportByCategory($startDate,$endDate);
            //$dataProvider->pagination->pageSize=5;
            
            $pages = new Pagination(['totalCount'=>$dataProvider->totalCount]);
            
            //die();
            return $this->render(
                  'ReportByCategory',
                  array(
                        'dataProvider' => $dataProvider,
                        'pages' => $pages,
                  )
            );
            
            
      }
      
      
      public function actionClass(){
            
            
            return $this->render(
                  'ReportByClass'
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
