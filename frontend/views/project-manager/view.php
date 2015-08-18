<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectManager */

$this->title = $model->ProjectManagerName;
$this->params['breadcrumbs'][] = ['label' => 'Project Managers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-manager-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ProjectManagerId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ProjectManagerId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ProjectManagerId',
            'ProjectManagerName',
        ],
    ]) ?>

</div>
