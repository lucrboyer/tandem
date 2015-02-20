<?php

namespace frontend\controllers;

use Yii;
use frontend\models\ProjectOffNet;
use frontend\models\ProjectOffNetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProjectOffNetController implements the CRUD actions for ProjectOffNet model.
 */
class ProjectOffNetController extends Controller
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
     * Lists all ProjectOffNet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProjectOffNetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProjectOffNet model.
     * @param integer $ProjectCategoryId
     * @param string $ProjectId
     * @param integer $ProjectManagerId
     * @param integer $ProjectTypeId
     * @return mixed
     */
    public function actionView($ProjectCategoryId, $ProjectId, $ProjectManagerId, $ProjectTypeId)
    {
        return $this->render('view', [
            'model' => $this->findModel($ProjectCategoryId, $ProjectId, $ProjectManagerId, $ProjectTypeId),
        ]);
    }

    /**
     * Creates a new ProjectOffNet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProjectOffNet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId, 'ProjectManagerId' => $model->ProjectManagerId, 'ProjectTypeId' => $model->ProjectTypeId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ProjectOffNet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ProjectCategoryId
     * @param string $ProjectId
     * @param integer $ProjectManagerId
     * @param integer $ProjectTypeId
     * @return mixed
     */
    public function actionUpdate($ProjectCategoryId, $ProjectId, $ProjectManagerId, $ProjectTypeId)
    {
        $model = $this->findModel($ProjectCategoryId, $ProjectId, $ProjectManagerId, $ProjectTypeId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId, 'ProjectManagerId' => $model->ProjectManagerId, 'ProjectTypeId' => $model->ProjectTypeId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ProjectOffNet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ProjectCategoryId
     * @param string $ProjectId
     * @param integer $ProjectManagerId
     * @param integer $ProjectTypeId
     * @return mixed
     */
    public function actionDelete($ProjectCategoryId, $ProjectId, $ProjectManagerId, $ProjectTypeId)
    {
        $this->findModel($ProjectCategoryId, $ProjectId, $ProjectManagerId, $ProjectTypeId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProjectOffNet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ProjectCategoryId
     * @param string $ProjectId
     * @param integer $ProjectManagerId
     * @param integer $ProjectTypeId
     * @return ProjectOffNet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ProjectCategoryId, $ProjectId, $ProjectManagerId, $ProjectTypeId)
    {
        if (($model = ProjectOffNet::findOne(['ProjectCategoryId' => $ProjectCategoryId, 'ProjectId' => $ProjectId, 'ProjectManagerId' => $ProjectManagerId, 'ProjectTypeId' => $ProjectTypeId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
