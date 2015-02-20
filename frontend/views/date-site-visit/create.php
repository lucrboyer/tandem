<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\DateSiteVisit */

$this->title = 'Create Date Site Visit';
$this->params['breadcrumbs'][] = ['label' => 'Date Site Visits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="date-site-visit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
