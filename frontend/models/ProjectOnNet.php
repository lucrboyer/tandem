<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "project_on_net".
 *
 * @property string $ProjectId
 * @property integer $ProjectCategoryId
 * @property integer $ProjectManagerId
 * @property integer $ProjectTypeId
 * @property integer $SpatialRequired
 * @property integer $NumberOfFloors
 * @property string $PlansRequested
 * @property string $AsBuiltPlansRequested
 * @property integer $EmailToPmRequired
 * @property string $Company
 * @property string $Name
 * @property string $EmailAddress
 * @property string $PhoneNumber
 */
class ProjectOnNet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_on_net';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'ProjectCategoryId', 'ProjectManagerId', 'ProjectTypeId'], 'required'],
            [['ProjectId', 'Company', 'Name', 'EmailAddress', 'PhoneNumber'], 'string'],
            [['ProjectCategoryId', 'ProjectManagerId', 'ProjectTypeId', 'SpatialRequired', 'NumberOfFloors', 'EmailToPmRequired'], 'integer'],
            [['PlansRequested', 'AsBuiltPlansRequested'], 'safe']
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
            'SpatialRequired' => 'Spatial Required',
            'NumberOfFloors' => 'Number Of Floors',
            'PlansRequested' => 'Plans Requested',
            'AsBuiltPlansRequested' => 'As Built Plans Requested',
            'EmailToPmRequired' => 'Email To Pm Required',
            'Company' => 'Company',
            'Name' => 'Name',
            'EmailAddress' => 'Email Address',
            'PhoneNumber' => 'Phone Number',
        ];
    }
}
