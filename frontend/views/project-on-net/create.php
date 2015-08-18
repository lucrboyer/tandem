<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectOnNet */

$this->title = 'Create Project On Net';
$this->params['breadcrumbs'][] = ['label' => 'Project On Nets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-on-net-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
