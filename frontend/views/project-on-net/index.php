<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProjectOnNetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project On Nets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-on-net-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Project On Net', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProjectId',
            'ProjectCategoryId',
            'ProjectManagerId',
            'ProjectTypeId',
            'SpatialRequired',
            // 'NumberOfFloors',
            // 'PlansRequested',
            // 'AsBuiltPlansRequested',
            // 'EmailToPmRequired:email',
            // 'Company',
            // 'Name',
            // 'EmailAddress:email',
            // 'PhoneNumber',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
