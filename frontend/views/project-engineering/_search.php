<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectEngineeringSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-engineering-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ProjectId') ?>

    <?= $form->field($model, 'ProjectCategoryId') ?>

    <?= $form->field($model, 'ProjectAddress') ?>

    <?= $form->field($model, 'ProjectDescription') ?>

    <?= $form->field($model, 'Hyperlink') ?>

    <?php // echo $form->field($model, 'ReceivedDate') ?>

    <?php // echo $form->field($model, 'DueDate') ?>

    <?php // echo $form->field($model, 'ClientId') ?>

    <?php // echo $form->field($model, 'ClientProjectNumber') ?>

    <?php // echo $form->field($model, 'NetworkStatus') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'Notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
