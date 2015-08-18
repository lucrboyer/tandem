<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectOffNet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-off-net-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProjectId')->textInput() ?>

    <?= $form->field($model, 'ProjectCategoryId')->textInput() ?>

    <?= $form->field($model, 'ProjectManagerId')->textInput() ?>

    <?= $form->field($model, 'ProjectTypeId')->textInput() ?>

    <?= $form->field($model, 'ApproximateAerialDistance')->textInput() ?>

    <?= $form->field($model, 'ApproximateUndergroundDistance')->textInput() ?>

    <?= $form->field($model, 'ExistingPermitRequired')->textInput() ?>

    <?= $form->field($model, 'AllstreamRequest')->textInput() ?>

    <?= $form->field($model, 'AllstreamReceived')->textInput() ?>

    <?= $form->field($model, 'BellCanadaRequest')->textInput() ?>

    <?= $form->field($model, 'BellCanadaReceived')->textInput() ?>

    <?= $form->field($model, 'HydroOneRequest')->textInput() ?>

    <?= $form->field($model, 'HydroOneReceived')->textInput() ?>

    <?= $form->field($model, 'RogersRequest')->textInput() ?>

    <?= $form->field($model, 'RogersReceived')->textInput() ?>

    <?= $form->field($model, 'CRPlansRequired')->textInput() ?>

    <?= $form->field($model, 'CRPlansRequest')->textInput() ?>

    <?= $form->field($model, 'CRPlansReceived')->textInput() ?>

    <?= $form->field($model, 'LocatesRequired')->textInput() ?>

    <?= $form->field($model, 'LocatesRequest')->textInput() ?>

    <?= $form->field($model, 'LocatesReceived')->textInput() ?>

    <?= $form->field($model, 'SpatialRequired')->textInput() ?>

    <?= $form->field($model, 'SpatialComplete')->textInput() ?>

    <?= $form->field($model, 'SitePlanRequired')->textInput() ?>

    <?= $form->field($model, 'NumberOfFloors')->textInput() ?>

    <?= $form->field($model, 'PrivateConsentRequired')->textInput() ?>

    <?= $form->field($model, 'PrivateConsentPlanSubmitted')->textInput() ?>

    <?= $form->field($model, 'PrivateConsentPlanReceived')->textInput() ?>

    <?= $form->field($model, 'Company')->textInput() ?>

    <?= $form->field($model, 'Name')->textInput() ?>

    <?= $form->field($model, 'EmailAddress')->textInput() ?>

    <?= $form->field($model, 'PhoneNumber')->textInput() ?>

    <?= $form->field($model, 'DoorKnockingComplete')->textInput() ?>

    <?= $form->field($model, 'PMEmail1')->textInput() ?>

    <?= $form->field($model, 'PMEmail2')->textInput() ?>

    <?= $form->field($model, 'PMEmail3')->textInput() ?>

    <?= $form->field($model, 'PMApprovalReceived')->textInput() ?>

    <?= $form->field($model, 'MunicipalConsent')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
