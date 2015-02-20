<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectOnNet */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Project On Nets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-on-net-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId, 'ProjectManagerId' => $model->ProjectManagerId, 'ProjectTypeId' => $model->ProjectTypeId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId, 'ProjectManagerId' => $model->ProjectManagerId, 'ProjectTypeId' => $model->ProjectTypeId], [
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
            'ProjectManagerId',
            'ProjectTypeId',
            'SpatialRequired',
            'NumberOfFloors',
            'PlansRequested',
            'AsBuiltPlansRequested',
            'EmailToPmRequired:email',
            'Company',
            'Name',
            'EmailAddress:email',
            'PhoneNumber',
        ],
    ]) ?>

</div>
