<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectOffNet */

$this->title = 'Create Project Off Net';
$this->params['breadcrumbs'][] = ['label' => 'Project Off Nets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-off-net-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
