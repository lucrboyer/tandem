<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\EmployeeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'EmployeeNumber') ?>

    <?= $form->field($model, 'HourlyRateOrSalary') ?>

    <?= $form->field($model, 'StartDate') ?>

    <?= $form->field($model, 'LayoffDate') ?>

    <?php // echo $form->field($model, 'ReasonForLayoff') ?>

    <?php // echo $form->field($model, 'RehireDate') ?>

    <?php // echo $form->field($model, 'Position') ?>

    <?php // echo $form->field($model, 'YearsOfExperience') ?>

    <?php // echo $form->field($model, 'FirstName') ?>

    <?php // echo $form->field($model, 'MiddleName') ?>

    <?php // echo $form->field($model, 'LastName') ?>

    <?php // echo $form->field($model, 'Gender') ?>

    <?php // echo $form->field($model, 'HomeAddress') ?>

    <?php // echo $form->field($model, 'CityProvince') ?>

    <?php // echo $form->field($model, 'PostalCode') ?>

    <?php // echo $form->field($model, 'HomePhoneNumber') ?>

    <?php // echo $form->field($model, 'CellularPhoneNumber') ?>

    <?php // echo $form->field($model, 'HomeFax') ?>

    <?php // echo $form->field($model, 'HomeEmailAddress') ?>

    <?php // echo $form->field($model, 'Birthday') ?>

    <?php // echo $form->field($model, 'SocialInsuranceNumber') ?>

    <?php // echo $form->field($model, 'DriverLicenseNumber') ?>

    <?php // echo $form->field($model, 'DriverLicenseProvince') ?>

    <?php // echo $form->field($model, 'DriverLicenseClass') ?>

    <?php // echo $form->field($model, 'DoctorName') ?>

    <?php // echo $form->field($model, 'DoctorAddress') ?>

    <?php // echo $form->field($model, 'DoctorPhoneNumber') ?>

    <?php // echo $form->field($model, 'BloodType') ?>

    <?php // echo $form->field($model, 'MedicalConditions') ?>

    <?php // echo $form->field($model, 'Allergies') ?>

    <?php // echo $form->field($model, 'CurrentMedications') ?>

    <?php // echo $form->field($model, 'EmergencyContactName') ?>

    <?php // echo $form->field($model, 'Relationship') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'PhoneNumber1') ?>

    <?php // echo $form->field($model, 'PhoneNumber2') ?>

    <?php // echo $form->field($model, 'PhoneNumber3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
