<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Employee;

/**
 * EmployeeSearch represents the model behind the search form about `frontend\models\Employee`.
 */
class EmployeeSearch extends Employee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'YearsOfExperience'], 'integer'],
            [['EmployeeNumber', 'StartDate', 'LayoffDate', 'ReasonForLayoff', 'RehireDate', 'Position', 'FirstName', 'MiddleName', 'LastName', 'Gender', 'HomeAddress', 'CityProvince', 'PostalCode', 'HomePhoneNumber', 'CellularPhoneNumber', 'HomeFax', 'HomeEmailAddress', 'Birthday', 'SocialInsuranceNumber', 'DriverLicenseNumber', 'DriverLicenseProvince', 'DriverLicenseClass', 'DoctorName', 'DoctorAddress', 'DoctorPhoneNumber', 'BloodType', 'MedicalConditions', 'Allergies', 'CurrentMedications', 'EmergencyContactName', 'Relationship', 'Address', 'PhoneNumber1', 'PhoneNumber2', 'PhoneNumber3'], 'safe'],
            [['HourlyRateOrSalary'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Employee::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ID' => $this->ID,
            'HourlyRateOrSalary' => $this->HourlyRateOrSalary,
            'StartDate' => $this->StartDate,
            'LayoffDate' => $this->LayoffDate,
            'RehireDate' => $this->RehireDate,
            'YearsOfExperience' => $this->YearsOfExperience,
            'Birthday' => $this->Birthday,
        ]);

        $query->andFilterWhere(['like', 'EmployeeNumber', $this->EmployeeNumber])
            ->andFilterWhere(['like', 'ReasonForLayoff', $this->ReasonForLayoff])
            ->andFilterWhere(['like', 'Position', $this->Position])
            ->andFilterWhere(['like', 'FirstName', $this->FirstName])
            ->andFilterWhere(['like', 'MiddleName', $this->MiddleName])
            ->andFilterWhere(['like', 'LastName', $this->LastName])
            ->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'HomeAddress', $this->HomeAddress])
            ->andFilterWhere(['like', 'CityProvince', $this->CityProvince])
            ->andFilterWhere(['like', 'PostalCode', $this->PostalCode])
            ->andFilterWhere(['like', 'HomePhoneNumber', $this->HomePhoneNumber])
            ->andFilterWhere(['like', 'CellularPhoneNumber', $this->CellularPhoneNumber])
            ->andFilterWhere(['like', 'HomeFax', $this->HomeFax])
            ->andFilterWhere(['like', 'HomeEmailAddress', $this->HomeEmailAddress])
            ->andFilterWhere(['like', 'SocialInsuranceNumber', $this->SocialInsuranceNumber])
            ->andFilterWhere(['like', 'DriverLicenseNumber', $this->DriverLicenseNumber])
            ->andFilterWhere(['like', 'DriverLicenseProvince', $this->DriverLicenseProvince])
            ->andFilterWhere(['like', 'DriverLicenseClass', $this->DriverLicenseClass])
            ->andFilterWhere(['like', 'DoctorName', $this->DoctorName])
            ->andFilterWhere(['like', 'DoctorAddress', $this->DoctorAddress])
            ->andFilterWhere(['like', 'DoctorPhoneNumber', $this->DoctorPhoneNumber])
            ->andFilterWhere(['like', 'BloodType', $this->BloodType])
            ->andFilterWhere(['like', 'MedicalConditions', $this->MedicalConditions])
            ->andFilterWhere(['like', 'Allergies', $this->Allergies])
            ->andFilterWhere(['like', 'CurrentMedications', $this->CurrentMedications])
            ->andFilterWhere(['like', 'EmergencyContactName', $this->EmergencyContactName])
            ->andFilterWhere(['like', 'Relationship', $this->Relationship])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'PhoneNumber1', $this->PhoneNumber1])
            ->andFilterWhere(['like', 'PhoneNumber2', $this->PhoneNumber2])
            ->andFilterWhere(['like', 'PhoneNumber3', $this->PhoneNumber3]);

        return $dataProvider;
    }
}
