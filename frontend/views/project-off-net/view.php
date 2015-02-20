<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectOffNet */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Project Off Nets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-off-net-view">

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
            'ApproximateAerialDistance',
            'ApproximateUndergroundDistance',
            'ExistingPermitRequired',
            'AllstreamRequest',
            'AllstreamReceived',
            'BellCanadaRequest',
            'BellCanadaReceived',
            'HydroOneRequest',
            'HydroOneReceived',
            'RogersRequest',
            'RogersReceived',
            'CRPlansRequired',
            'CRPlansRequest',
            'CRPlansReceived',
            'LocatesRequired',
            'LocatesRequest',
            'LocatesReceived',
            'SpatialRequired',
            'SpatialComplete',
            'SitePlanRequired',
            'NumberOfFloors',
            'PrivateConsentRequired',
            'PrivateConsentPlanSubmitted',
            'PrivateConsentPlanReceived',
            'Company',
            'Name',
            'EmailAddress:email',
            'PhoneNumber',
            'DoorKnockingComplete',
            'PMEmail1:email',
            'PMEmail2:email',
            'PMEmail3:email',
            'PMApprovalReceived',
            'MunicipalConsent',
        ],
    ]) ?>

</div>
