<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProjectEngineeringSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Engineering';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-engineering-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create an Engineering Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProjectId',
         #   'ProjectCategoryId',

         #    [
         #       'attribute' => 'ProjectCategoryId',
         #       'value' => 'ProjectCategory.ProjectCategoryName'
         #    ],
         #   'projectCategory.ProjectCategoryName',

            'ProjectAddress',
            'ProjectDescription',
            //'Hyperlink:ntext',
            [
               'attribute' => 'ReceivedDate',
               'format' => ['date', 'php:Y-m-d']
            ],                        
            [
               'attribute' => 'DueDate',
               'format' => ['date', 'php:Y-m-d']
            ],    
                         
            [
            'class' => 'yii\grid\CheckboxColumn',
            // you may configure additional properties here
            ],
            // 'ClientId',
            // 'ClientProjectNumber',
            // 'NetworkStatus',
            // 'Status',
            // 'Notes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>


