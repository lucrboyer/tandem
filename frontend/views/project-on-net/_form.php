<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectOnNet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-on-net-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProjectId')->textInput() ?>

    <?= $form->field($model, 'ProjectCategoryId')->textInput() ?>

    <?= $form->field($model, 'ProjectManagerId')->textInput() ?>

    <?= $form->field($model, 'ProjectTypeId')->textInput() ?>

    <?= $form->field($model, 'SpatialRequired')->textInput() ?>

    <?= $form->field($model, 'NumberOfFloors')->textInput() ?>

    <?= $form->field($model, 'PlansRequested')->textInput() ?>

    <?= $form->field($model, 'AsBuiltPlansRequested')->textInput() ?>

    <?= $form->field($model, 'EmailToPmRequired')->textInput() ?>

    <?= $form->field($model, 'Company')->textInput() ?>

    <?= $form->field($model, 'Name')->textInput() ?>

    <?= $form->field($model, 'EmailAddress')->textInput() ?>

    <?= $form->field($model, 'PhoneNumber')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
