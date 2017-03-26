<?php

namespace app\controllers;

use Yii;
use app\models\ItTaccount;
use app\models\ItTaccountSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ItTaccountController implements the CRUD actions for ItTaccount model.
 */
class ItTaccountController extends Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ItTaccount models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ItTaccountSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ItTaccount model.
     * @param integer $Acco_ID
     * @param integer $Acco_Type_ID
     * @return mixed
     */
    public function actionView($Acco_ID, $Acco_Type_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($Acco_ID, $Acco_Type_ID),
        ]);
    }

    /**
     * Creates a new ItTaccount model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ItTaccount();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Acco_ID' => $model->Acco_ID, 'Acco_Type_ID' => $model->Acco_Type_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ItTaccount model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Acco_ID
     * @param integer $Acco_Type_ID
     * @return mixed
     */
    public function actionUpdate($Acco_ID, $Acco_Type_ID)
    {
        $model = $this->findModel($Acco_ID, $Acco_Type_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Acco_ID' => $model->Acco_ID, 'Acco_Type_ID' => $model->Acco_Type_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ItTaccount model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Acco_ID
     * @param integer $Acco_Type_ID
     * @return mixed
     */
    public function actionDelete($Acco_ID, $Acco_Type_ID)
    {
        $this->findModel($Acco_ID, $Acco_Type_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ItTaccount model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Acco_ID
     * @param integer $Acco_Type_ID
     * @return ItTaccount the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Acco_ID, $Acco_Type_ID)
    {
        if (($model = ItTaccount::findOne(['Acco_ID' => $Acco_ID, 'Acco_Type_ID' => $Acco_Type_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
