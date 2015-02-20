<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectManager */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-manager-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProjectManagerId')->textInput() ?>

    <?= $form->field($model, 'ProjectManagerName')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
