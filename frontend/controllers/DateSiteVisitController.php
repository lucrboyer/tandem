<?php

namespace frontend\controllers;

use Yii;
use frontend\models\DateSiteVisit;
use frontend\models\DateSiteVisitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DateSiteVisitController implements the CRUD actions for DateSiteVisit model.
 */
class DateSiteVisitController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all DateSiteVisit models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DateSiteVisitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DateSiteVisit model.
     * @param integer $ProjectCategoryId
     * @param string $ProjectId
     * @param string $SiteVisitDate
     * @return mixed
     */
    public function actionView($ProjectCategoryId, $ProjectId, $SiteVisitDate)
    {
        return $this->render('view', [
            'model' => $this->findModel($ProjectCategoryId, $ProjectId, $SiteVisitDate),
        ]);
    }

    /**
     * Creates a new DateSiteVisit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DateSiteVisit();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId, 'SiteVisitDate' => $model->SiteVisitDate]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DateSiteVisit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ProjectCategoryId
     * @param string $ProjectId
     * @param string $SiteVisitDate
     * @return mixed
     */
    public function actionUpdate($ProjectCategoryId, $ProjectId, $SiteVisitDate)
    {
        $model = $this->findModel($ProjectCategoryId, $ProjectId, $SiteVisitDate);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId, 'SiteVisitDate' => $model->SiteVisitDate]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DateSiteVisit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ProjectCategoryId
     * @param string $ProjectId
     * @param string $SiteVisitDate
     * @return mixed
     */
    public function actionDelete($ProjectCategoryId, $ProjectId, $SiteVisitDate)
    {
        $this->findModel($ProjectCategoryId, $ProjectId, $SiteVisitDate)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DateSiteVisit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ProjectCategoryId
     * @param string $ProjectId
     * @param string $SiteVisitDate
     * @return DateSiteVisit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ProjectCategoryId, $ProjectId, $SiteVisitDate)
    {
        if (($model = DateSiteVisit::findOne(['ProjectCategoryId' => $ProjectCategoryId, 'ProjectId' => $ProjectId, 'SiteVisitDate' => $SiteVisitDate])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
