<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProjectTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Project Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProjectTypeId',
            'ProjectTypeName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
