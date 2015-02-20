<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectCategory */

$this->title = 'Update Project Category: ' . ' ' . $model->ProjectCategoryName;
$this->params['breadcrumbs'][] = ['label' => 'Project Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProjectCategoryId, 'url' => ['view', 'id' => $model->ProjectCategoryId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
