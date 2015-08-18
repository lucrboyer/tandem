<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DateSiteVisitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site Visit Dates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="date-site-visit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add a Site Visit Date', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProjectId',
            'ProjectCategoryId',
            'SiteVisitDate',
            'SiteVisitNotes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
