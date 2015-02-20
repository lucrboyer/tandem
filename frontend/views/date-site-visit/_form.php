<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DateSiteVisit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="date-site-visit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProjectId')->textInput() ?>

    <?= $form->field($model, 'ProjectCategoryId')->textInput() ?>

    <?= $form->field($model, 'SiteVisitDate')->textInput() ?>

    <?= $form->field($model, 'SiteVisitNotes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
