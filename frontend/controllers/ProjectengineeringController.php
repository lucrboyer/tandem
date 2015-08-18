<?php

namespace frontend\controllers;

use Yii;
use frontend\models\ProjectEngineering;
use frontend\models\ProjectEngineeringSearch;
use frontend\models\ProjectCategory;
use frontend\models\ProjectCategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProjectEngineeringController implements the CRUD actions for ProjectEngineering model.
 */
class ProjectEngineeringController extends Controller
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
     * Lists all ProjectEngineering models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProjectEngineeringSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProjectEngineering model.
     * @param integer $ProjectCategoryId
     * @param string $ProjectId
     * @return mixed
     */
    public function actionView($ProjectCategoryId, $ProjectId)
    {
        return $this->render('view', [
            'model' => $this->findModel($ProjectCategoryId, $ProjectId),
        ]);
    }

    /**
     * Creates a new ProjectEngineering model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProjectEngineering();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ProjectEngineering model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ProjectCategoryId
     * @param string $ProjectId
     * @return mixed
     */
    public function actionUpdate($ProjectCategoryId, $ProjectId)
    {
        $model = $this->findModel($ProjectCategoryId, $ProjectId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ProjectEngineering model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ProjectCategoryId
     * @param string $ProjectId
     * @return mixed
     */
    public function actionDelete($ProjectCategoryId, $ProjectId)
    {
        $this->findModel($ProjectCategoryId, $ProjectId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProjectEngineering model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ProjectCategoryId
     * @param string $ProjectId
     * @return ProjectEngineering the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ProjectCategoryId, $ProjectId)
    {
        if (($model = ProjectEngineering::findOne(['ProjectCategoryId' => $ProjectCategoryId, 'ProjectId' => $ProjectId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
