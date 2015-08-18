<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProjectCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Project Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProjectCategoryId',
            'ProjectCategoryName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
