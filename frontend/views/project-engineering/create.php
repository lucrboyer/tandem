<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectEngineering */

$this->title = 'Create Project Engineering';
$this->params['breadcrumbs'][] = ['label' => 'Project Engineerings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-engineering-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
