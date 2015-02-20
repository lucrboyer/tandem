<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectOnNetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-on-net-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ProjectId') ?>

    <?= $form->field($model, 'ProjectCategoryId') ?>

    <?= $form->field($model, 'ProjectManagerId') ?>

    <?= $form->field($model, 'ProjectTypeId') ?>

    <?= $form->field($model, 'SpatialRequired') ?>

    <?php // echo $form->field($model, 'NumberOfFloors') ?>

    <?php // echo $form->field($model, 'PlansRequested') ?>

    <?php // echo $form->field($model, 'AsBuiltPlansRequested') ?>

    <?php // echo $form->field($model, 'EmailToPmRequired') ?>

    <?php // echo $form->field($model, 'Company') ?>

    <?php // echo $form->field($model, 'Name') ?>

    <?php // echo $form->field($model, 'EmailAddress') ?>

    <?php // echo $form->field($model, 'PhoneNumber') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
