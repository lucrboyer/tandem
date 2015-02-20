<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectOffNet */

$this->title = 'Update Project Off Net: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Project Off Nets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId, 'ProjectManagerId' => $model->ProjectManagerId, 'ProjectTypeId' => $model->ProjectTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-off-net-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
