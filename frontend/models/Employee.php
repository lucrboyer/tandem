<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $ID
 * @property string $EmployeeNumber
 * @property string $HourlyRateOrSalary
 * @property string $StartDate
 * @property string $LayoffDate
 * @property string $ReasonForLayoff
 * @property string $RehireDate
 * @property string $Position
 * @property integer $YearsOfExperience
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 * @property string $Gender
 * @property string $HomeAddress
 * @property string $CityProvince
 * @property string $PostalCode
 * @property string $HomePhoneNumber
 * @property string $CellularPhoneNumber
 * @property string $HomeFax
 * @property string $HomeEmailAddress
 * @property string $Birthday
 * @property string $SocialInsuranceNumber
 * @property string $DriverLicenseNumber
 * @property string $DriverLicenseProvince
 * @property string $DriverLicenseClass
 * @property string $DoctorName
 * @property string $DoctorAddress
 * @property string $DoctorPhoneNumber
 * @property string $BloodType
 * @property string $MedicalConditions
 * @property string $Allergies
 * @property string $CurrentMedications
 * @property string $EmergencyContactName
 * @property string $Relationship
 * @property string $Address
 * @property string $PhoneNumber1
 * @property string $PhoneNumber2
 * @property string $PhoneNumber3
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EmployeeNumber', 'ReasonForLayoff', 'Position', 'FirstName', 'MiddleName', 'LastName', 'Gender', 'HomeAddress', 'CityProvince', 'PostalCode', 'HomePhoneNumber', 'CellularPhoneNumber', 'HomeFax', 'HomeEmailAddress', 'SocialInsuranceNumber', 'DriverLicenseNumber', 'DriverLicenseProvince', 'DriverLicenseClass', 'DoctorName', 'DoctorAddress', 'DoctorPhoneNumber', 'BloodType', 'MedicalConditions', 'Allergies', 'CurrentMedications', 'EmergencyContactName', 'Relationship', 'Address', 'PhoneNumber1', 'PhoneNumber2', 'PhoneNumber3'], 'string'],
            [['HourlyRateOrSalary'], 'number'],
            [['StartDate', 'LayoffDate', 'RehireDate', 'Birthday'], 'safe'],
            [['YearsOfExperience'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'EmployeeNumber' => 'Employee Number',
            'HourlyRateOrSalary' => 'Hourly Rate Or Salary',
            'StartDate' => 'Start Date',
            'LayoffDate' => 'Layoff Date',
            'ReasonForLayoff' => 'Reason For Layoff',
            'RehireDate' => 'Rehire Date',
            'Position' => 'Position',
            'YearsOfExperience' => 'Years Of Experience',
            'FirstName' => 'First Name',
            'MiddleName' => 'Middle Name',
            'LastName' => 'Last Name',
            'Gender' => 'Gender',
            'HomeAddress' => 'Home Address',
            'CityProvince' => 'City Province',
            'PostalCode' => 'Postal Code',
            'HomePhoneNumber' => 'Home Phone Number',
            'CellularPhoneNumber' => 'Cellular Phone Number',
            'HomeFax' => 'Home Fax',
            'HomeEmailAddress' => 'Home Email Address',
            'Birthday' => 'Birthday',
            'SocialInsuranceNumber' => 'Social Insurance Number',
            'DriverLicenseNumber' => 'Driver License Number',
            'DriverLicenseProvince' => 'Driver License Province',
            'DriverLicenseClass' => 'Driver License Class',
            'DoctorName' => 'Doctor Name',
            'DoctorAddress' => 'Doctor Address',
            'DoctorPhoneNumber' => 'Doctor Phone Number',
            'BloodType' => 'Blood Type',
            'MedicalConditions' => 'Medical Conditions',
            'Allergies' => 'Allergies',
            'CurrentMedications' => 'Current Medications',
            'EmergencyContactName' => 'Emergency Contact Name',
            'Relationship' => 'Relationship',
            'Address' => 'Address',
            'PhoneNumber1' => 'Phone Number1',
            'PhoneNumber2' => 'Phone Number2',
            'PhoneNumber3' => 'Phone Number3',
        ];
    }
}
