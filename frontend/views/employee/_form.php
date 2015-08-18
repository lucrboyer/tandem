<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmployeeNumber')->textInput() ?>

    <?= $form->field($model, 'HourlyRateOrSalary')->textInput() ?>

    <?= $form->field($model, 'StartDate')->textInput() ?>

    <?= $form->field($model, 'LayoffDate')->textInput() ?>

    <?= $form->field($model, 'ReasonForLayoff')->textInput() ?>

    <?= $form->field($model, 'RehireDate')->textInput() ?>

    <?= $form->field($model, 'Position')->textInput() ?>

    <?= $form->field($model, 'YearsOfExperience')->textInput() ?>

    <?= $form->field($model, 'FirstName')->textInput() ?>

    <?= $form->field($model, 'MiddleName')->textInput() ?>

    <?= $form->field($model, 'LastName')->textInput() ?>

    <?= $form->field($model, 'Gender')->textInput() ?>

    <?= $form->field($model, 'HomeAddress')->textInput() ?>

    <?= $form->field($model, 'CityProvince')->textInput() ?>

    <?= $form->field($model, 'PostalCode')->textInput() ?>

    <?= $form->field($model, 'HomePhoneNumber')->textInput() ?>

    <?= $form->field($model, 'CellularPhoneNumber')->textInput() ?>

    <?= $form->field($model, 'HomeFax')->textInput() ?>

    <?= $form->field($model, 'HomeEmailAddress')->textInput() ?>

    <?= $form->field($model, 'Birthday')->textInput() ?>

    <?= $form->field($model, 'SocialInsuranceNumber')->textInput() ?>

    <?= $form->field($model, 'DriverLicenseNumber')->textInput() ?>

    <?= $form->field($model, 'DriverLicenseProvince')->textInput() ?>

    <?= $form->field($model, 'DriverLicenseClass')->textInput() ?>

    <?= $form->field($model, 'DoctorName')->textInput() ?>

    <?= $form->field($model, 'DoctorAddress')->textInput() ?>

    <?= $form->field($model, 'DoctorPhoneNumber')->textInput() ?>

    <?= $form->field($model, 'BloodType')->textInput() ?>

    <?= $form->field($model, 'MedicalConditions')->textInput() ?>

    <?= $form->field($model, 'Allergies')->textInput() ?>

    <?= $form->field($model, 'CurrentMedications')->textInput() ?>

    <?= $form->field($model, 'EmergencyContactName')->textInput() ?>

    <?= $form->field($model, 'Relationship')->textInput() ?>

    <?= $form->field($model, 'Address')->textInput() ?>

    <?= $form->field($model, 'PhoneNumber1')->textInput() ?>

    <?= $form->field($model, 'PhoneNumber2')->textInput() ?>

    <?= $form->field($model, 'PhoneNumber3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
