<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectEngineering */

$this->title = $model->ProjectId;
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-engineering-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ProjectCategoryId' => $model->ProjectCategoryId, 'ProjectId' => $model->ProjectId], [
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
            'ProjectId',
          #  'ProjectCategoryId',
          #  'projectCategory.ProjectCategoryName',
            'ProjectAddress',
            'ProjectDescription',
            [
              'label'=>'Hyperlink',
              'format' => 'url',
              'attribute' => 'Hyperlink',
            #  'value'=> 'Hyperlink:ntext',
            #  'value'=>function ($data) {
            #     return Html::url('Hyperlink:ntext');
            #     },
            ],
            [
             'attribute' => 'ReceivedDate',
             'format' => ['date', 'php:Y-m-d']
            ],                        
            [
            'attribute' => 'DueDate',
            'format' => ['date', 'php:Y-m-d']
            ],    
            # 'ClientId',
            'client.ClientName',    
            'ClientProjectNumber',
            'NetworkStatus',

            [
               'label' => 'Network Status',
               'format' => 'url',
               'attribute' => 'NetworkStatus',
               'value' => 'http://localhost/tandem/frontend/web/index.php?r=project-on-net'

            #   'value'=>function ($data) {
            #   return Html::url('http://localhost/tandem/frontend/web/index.php?r=project-on-net');
            #   },

            ],

            'status.Status',
            'Notes:ntext',
        ],
    ]) ?>

</div>

