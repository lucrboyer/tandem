<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectOffNetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-off-net-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ProjectId') ?>

    <?= $form->field($model, 'ProjectCategoryId') ?>

    <?= $form->field($model, 'ProjectManagerId') ?>

    <?= $form->field($model, 'ProjectTypeId') ?>

    <?= $form->field($model, 'ApproximateAerialDistance') ?>

    <?php // echo $form->field($model, 'ApproximateUndergroundDistance') ?>

    <?php // echo $form->field($model, 'ExistingPermitRequired') ?>

    <?php // echo $form->field($model, 'AllstreamRequest') ?>

    <?php // echo $form->field($model, 'AllstreamReceived') ?>

    <?php // echo $form->field($model, 'BellCanadaRequest') ?>

    <?php // echo $form->field($model, 'BellCanadaReceived') ?>

    <?php // echo $form->field($model, 'HydroOneRequest') ?>

    <?php // echo $form->field($model, 'HydroOneReceived') ?>

    <?php // echo $form->field($model, 'RogersRequest') ?>

    <?php // echo $form->field($model, 'RogersReceived') ?>

    <?php // echo $form->field($model, 'CRPlansRequired') ?>

    <?php // echo $form->field($model, 'CRPlansRequest') ?>

    <?php // echo $form->field($model, 'CRPlansReceived') ?>

    <?php // echo $form->field($model, 'LocatesRequired') ?>

    <?php // echo $form->field($model, 'LocatesRequest') ?>

    <?php // echo $form->field($model, 'LocatesReceived') ?>

    <?php // echo $form->field($model, 'SpatialRequired') ?>

    <?php // echo $form->field($model, 'SpatialComplete') ?>

    <?php // echo $form->field($model, 'SitePlanRequired') ?>

    <?php // echo $form->field($model, 'NumberOfFloors') ?>

    <?php // echo $form->field($model, 'PrivateConsentRequired') ?>

    <?php // echo $form->field($model, 'PrivateConsentPlanSubmitted') ?>

    <?php // echo $form->field($model, 'PrivateConsentPlanReceived') ?>

    <?php // echo $form->field($model, 'Company') ?>

    <?php // echo $form->field($model, 'Name') ?>

    <?php // echo $form->field($model, 'EmailAddress') ?>

    <?php // echo $form->field($model, 'PhoneNumber') ?>

    <?php // echo $form->field($model, 'DoorKnockingComplete') ?>

    <?php // echo $form->field($model, 'PMEmail1') ?>

    <?php // echo $form->field($model, 'PMEmail2') ?>

    <?php // echo $form->field($model, 'PMEmail3') ?>

    <?php // echo $form->field($model, 'PMApprovalReceived') ?>

    <?php // echo $form->field($model, 'MunicipalConsent') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
