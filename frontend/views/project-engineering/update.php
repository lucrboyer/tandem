<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectEngineering */

$this->title = 'Update Engineering Project: ' . ' ' . $model->ProjectId;
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProjectId, 'url' => ['view', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-engineering-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
