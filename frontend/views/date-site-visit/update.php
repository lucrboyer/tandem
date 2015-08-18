<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DateSiteVisit */

$this->title = 'Update Date Site Visit: ' . ' ' . $model->ProjectId;
$this->params['breadcrumbs'][] = ['label' => 'Site Visits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProjectId, 'url' => ['view', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId, 'SiteVisitDate' => $model->SiteVisitDate]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="date-site-visit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
