<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectManager */

$this->title = 'Update Project Manager: ' . ' ' . $model->ProjectManagerName;
$this->params['breadcrumbs'][] = ['label' => 'Project Managers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProjectManagerId, 'url' => ['view', 'id' => $model->ProjectManagerId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-manager-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
