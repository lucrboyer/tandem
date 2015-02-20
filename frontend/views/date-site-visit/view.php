<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\DateSiteVisit */

$this->title = $model->ProjectCategoryId;
$this->params['breadcrumbs'][] = ['label' => 'Date Site Visits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="date-site-visit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId, 'SiteVisitDate' => $model->SiteVisitDate], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId, 'SiteVisitDate' => $model->SiteVisitDate], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ProjectId',
            'ProjectCategoryId',
            'SiteVisitDate',
            'SiteVisitNotes:ntext',
        ],
    ]) ?>

</div>
