<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

//use kartik\widgets\ActiveForm;
//use kartik\widgets\DatePicker;

use yii\helpers\ArrayHelper;
use frontend\models\Client;
use frontend\models\Status;
//use kartik\builder\Form;
use yii\jui\DatePicker

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectEngineering */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="project-engineering-form">

    <?php $form = ActiveForm::begin([
          'id' => 'active-form',
          'options' => [
                'class' => 'form-horizontal',
                'enctype' => 'multipart/form-data'
                ],
     ]) ?> 


   <?= $form->field($model, 'ProjectId')->textInput() ?>  

    <!-- <?= $form->field($model, 'ProjectCategoryId')->textInput() ?>   -->

    <?= $form->field($model, 'ProjectAddress')->textInput()->hint('Please enter the project address')->label('Address') ?>

    <?= $form->field($model, 'ProjectDescription')->textInput() ?>

    <?= $form->field($model, 'Hyperlink')->textarea(['rows' => 1]) ?>

    <!--?= $form->field($model, 'ReceivedDate')->textInput() ?-->

    <?php 
          $model->ReceivedDate = date("Y-m-d",strtotime($model->ReceivedDate ));
          echo $form->field($model  ,'ReceivedDate')->widget(DatePicker::className(),['dateFormat' => 'yyyy-MM-dd'],
                     ['clientOptions' => [ 'dateFormat' => 'yyyy-MM-dd', 'defaultDate' => '2015-01-01']]); 
    ?>
     
    <?php 
          $model->DueDate = date("Y-m-d",strtotime($model->DueDate ));
          echo $form->field($model,'DueDate')->widget(DatePicker::className(),['dateFormat' => 'yyyy-MM-dd'],
                     ['clientOptions' => [ 'dateFormat' => 'yyyy-MM-dd', 'defaultDate' => '2016-01-01']]); 
    ?>
       
        
    <b>
    <?= 'Client' ?>  &nbsp;&nbsp;
    </b>
    
    <!-- ?= $form->field($model, 'ClientId')->textInput() ?>   -->

    <?= Html::activeDropDownList($model, 'ClientId',
      ArrayHelper::map(Client::find()->all(), 'ClientId', 'ClientName')) ?>

    <br/><br/> 

    <?= $form->field($model, 'ClientProjectNumber')->textInput() ?>

    <?php echo $form->field($model, 'NetworkStatus')->dropDownList(['On Net' => 'On Net', 'Off Net' => 'Off Net', 'NA' => 'Not Applicable']); ?>

    <!--?= $form->field($model, 'Status')->textInput() ?-->

    <b>
    <?= 'Status' ?>  &nbsp;&nbsp;
    </b>
    
    <?= Html::activeDropDownList($model, 'StatusId',
      ArrayHelper::map(Status::find()->all(), 'StatusId', 'Status')) ?>

    <br/><br/> 


    <?= $form->field($model, 'Notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
