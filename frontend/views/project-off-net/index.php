<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProjectOffNetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project Off Nets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-off-net-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Project Off Net', ['create'], ['class' => 'btn btn-success']) ?>
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
            'ApproximateAerialDistance',
            // 'ApproximateUndergroundDistance',
            // 'ExistingPermitRequired',
            // 'AllstreamRequest',
            // 'AllstreamReceived',
            // 'BellCanadaRequest',
            // 'BellCanadaReceived',
            // 'HydroOneRequest',
            // 'HydroOneReceived',
            // 'RogersRequest',
            // 'RogersReceived',
            // 'CRPlansRequired',
            // 'CRPlansRequest',
            // 'CRPlansReceived',
            // 'LocatesRequired',
            // 'LocatesRequest',
            // 'LocatesReceived',
            // 'SpatialRequired',
            // 'SpatialComplete',
            // 'SitePlanRequired',
            // 'NumberOfFloors',
            // 'PrivateConsentRequired',
            // 'PrivateConsentPlanSubmitted',
            // 'PrivateConsentPlanReceived',
            // 'Company',
            // 'Name',
            // 'EmailAddress:email',
            // 'PhoneNumber',
            // 'DoorKnockingComplete',
            // 'PMEmail1:email',
            // 'PMEmail2:email',
            // 'PMEmail3:email',
            // 'PMApprovalReceived',
            // 'MunicipalConsent',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
