<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "project_off_net".
 *
 * @property string $ProjectId
 * @property integer $ProjectCategoryId
 * @property integer $ProjectManagerId
 * @property integer $ProjectTypeId
 * @property integer $ApproximateAerialDistance
 * @property integer $ApproximateUndergroundDistance
 * @property integer $ExistingPermitRequired
 * @property string $AllstreamRequest
 * @property string $AllstreamReceived
 * @property string $BellCanadaRequest
 * @property string $BellCanadaReceived
 * @property string $HydroOneRequest
 * @property string $HydroOneReceived
 * @property string $RogersRequest
 * @property string $RogersReceived
 * @property integer $CRPlansRequired
 * @property string $CRPlansRequest
 * @property string $CRPlansReceived
 * @property integer $LocatesRequired
 * @property string $LocatesRequest
 * @property string $LocatesReceived
 * @property integer $SpatialRequired
 * @property string $SpatialComplete
 * @property integer $SitePlanRequired
 * @property integer $NumberOfFloors
 * @property integer $PrivateConsentRequired
 * @property string $PrivateConsentPlanSubmitted
 * @property string $PrivateConsentPlanReceived
 * @property string $Company
 * @property string $Name
 * @property string $EmailAddress
 * @property string $PhoneNumber
 * @property string $DoorKnockingComplete
 * @property string $PMEmail1
 * @property string $PMEmail2
 * @property string $PMEmail3
 * @property string $PMApprovalReceived
 * @property string $MunicipalConsent
 */
class ProjectOffNet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_off_net';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'ProjectCategoryId', 'ProjectManagerId', 'ProjectTypeId'], 'required'],
            [['ProjectId', 'Company', 'Name', 'EmailAddress', 'PhoneNumber', 'MunicipalConsent'], 'string'],
            [['ProjectCategoryId', 'ProjectManagerId', 'ProjectTypeId', 'ApproximateAerialDistance', 'ApproximateUndergroundDistance', 'ExistingPermitRequired', 'CRPlansRequired', 'LocatesRequired', 'SpatialRequired', 'SitePlanRequired', 'NumberOfFloors', 'PrivateConsentRequired'], 'integer'],
            [['AllstreamRequest', 'AllstreamReceived', 'BellCanadaRequest', 'BellCanadaReceived', 'HydroOneRequest', 'HydroOneReceived', 'RogersRequest', 'RogersReceived', 'CRPlansRequest', 'CRPlansReceived', 'LocatesRequest', 'LocatesReceived', 'SpatialComplete', 'PrivateConsentPlanSubmitted', 'PrivateConsentPlanReceived', 'DoorKnockingComplete', 'PMEmail1', 'PMEmail2', 'PMEmail3', 'PMApprovalReceived'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProjectId' => 'Project ID',
            'ProjectCategoryId' => 'Project Category ID',
            'ProjectManagerId' => 'Project Manager ID',
            'ProjectTypeId' => 'Project Type ID',
            'ApproximateAerialDistance' => 'Approximate Aerial Distance',
            'ApproximateUndergroundDistance' => 'Approximate Underground Distance',
            'ExistingPermitRequired' => 'Existing Permit Required',
            'AllstreamRequest' => 'Allstream Request',
            'AllstreamReceived' => 'Allstream Received',
            'BellCanadaRequest' => 'Bell Canada Request',
            'BellCanadaReceived' => 'Bell Canada Received',
            'HydroOneRequest' => 'Hydro One Request',
            'HydroOneReceived' => 'Hydro One Received',
            'RogersRequest' => 'Rogers Request',
            'RogersReceived' => 'Rogers Received',
            'CRPlansRequired' => 'Crplans Required',
            'CRPlansRequest' => 'Crplans Request',
            'CRPlansReceived' => 'Crplans Received',
            'LocatesRequired' => 'Locates Required',
            'LocatesRequest' => 'Locates Request',
            'LocatesReceived' => 'Locates Received',
            'SpatialRequired' => 'Spatial Required',
            'SpatialComplete' => 'Spatial Complete',
            'SitePlanRequired' => 'Site Plan Required',
            'NumberOfFloors' => 'Number Of Floors',
            'PrivateConsentRequired' => 'Private Consent Required',
            'PrivateConsentPlanSubmitted' => 'Private Consent Plan Submitted',
            'PrivateConsentPlanReceived' => 'Private Consent Plan Received',
            'Company' => 'Company',
            'Name' => 'Name',
            'EmailAddress' => 'Email Address',
            'PhoneNumber' => 'Phone Number',
            'DoorKnockingComplete' => 'Door Knocking Complete',
            'PMEmail1' => 'Pmemail1',
            'PMEmail2' => 'Pmemail2',
            'PMEmail3' => 'Pmemail3',
            'PMApprovalReceived' => 'Pmapproval Received',
            'MunicipalConsent' => 'Municipal Consent',
        ];
    }
}
