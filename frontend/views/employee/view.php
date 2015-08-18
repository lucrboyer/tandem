<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Employee */

$this->title = $model->LastName . ' ' . $model->FirstName;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
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
            'ID',
            'EmployeeNumber',
            'HourlyRateOrSalary:url',
            'StartDate',
            'LayoffDate',
            'ReasonForLayoff',
            'RehireDate',
            'Position',
            'YearsOfExperience',
            'FirstName',
            'MiddleName',
            'LastName',
            'Gender',
            'HomeAddress',
            'CityProvince',
            'PostalCode',
            'HomePhoneNumber',
            'CellularPhoneNumber',
            'HomeFax',
            'HomeEmailAddress:email',
            'Birthday',
            'SocialInsuranceNumber',
            'DriverLicenseNumber',
            'DriverLicenseProvince',
            'DriverLicenseClass',
            'DoctorName',
            'DoctorAddress',
            'DoctorPhoneNumber',
            'BloodType',
            'MedicalConditions',
            'Allergies',
            'CurrentMedications',
            'EmergencyContactName',
            'Relationship',
            'Address',
            'PhoneNumber1',
            'PhoneNumber2',
            'PhoneNumber3',
        ],
    ]) ?>

</div>
