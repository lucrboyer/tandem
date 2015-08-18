<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'EmployeeNumber',
            //'HourlyRateOrSalary:url',
            'StartDate',
            //'LayoffDate',
            // 'ReasonForLayoff',
            // 'RehireDate',
            // 'Position',
            // 'YearsOfExperience',
            'FirstName',
            // 'MiddleName',
            'LastName',
            // 'Gender',
            // 'HomeAddress',
            // 'CityProvince',
            // 'PostalCode',
            // 'HomePhoneNumber',
            // 'CellularPhoneNumber',
            // 'HomeFax',
            // 'HomeEmailAddress:email',
            // 'Birthday',
            // 'SocialInsuranceNumber',
            // 'DriverLicenseNumber',
            // 'DriverLicenseProvince',
            // 'DriverLicenseClass',
            // 'DoctorName',
            // 'DoctorAddress',
            // 'DoctorPhoneNumber',
            // 'BloodType',
            // 'MedicalConditions',
            // 'Allergies',
            // 'CurrentMedications',
            // 'EmergencyContactName',
            // 'Relationship',
            // 'Address',
            // 'PhoneNumber1',
            // 'PhoneNumber2',
            // 'PhoneNumber3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
