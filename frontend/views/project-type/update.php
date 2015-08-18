<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectType */

$this->title = 'Update Project Type: ' . ' ' . $model->ProjectTypeName;
$this->params['breadcrumbs'][] = ['label' => 'Project Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProjectTypeId, 'url' => ['view', 'id' => $model->ProjectTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
