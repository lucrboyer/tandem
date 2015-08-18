<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "project_engineering".
 *
 * @property string $ProjectId
 * @property integer $ProjectCategoryId
 * @property string $ProjectAddress
 * @property string $ProjectDescription
 * @property string $Hyperlink
 * @property string $ReceivedDate
 * @property string $DueDate
 * @property integer $ClientId
 * @property string $ClientProjectNumber
 * @property string $NetworkStatus
 * @property integer $StatusId
 * @property string $Notes
 *
 * @property DateFieldWorkComplete[] $dateFieldWorkCompletes
 * @property DateSiteVisit[] $dateSiteVisits
 * @property DatePlansSubmitted[] $datePlansSubmitteds
 * @property DateRevisedPlansSubmitted[] $dateRevisedPlansSubmitteds
 * @property DatePoRequest[] $datePoRequests
 * @property DatePoApproval[] $datePoApprovals
 * @property ProjectEngineering $projectCategory
 * @property ProjectEngineering[] $projectEngineerings
 * @property ProjectEngineering $project
 */
class ProjectEngineering extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_engineering';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'ProjectCategoryId'], 'required'],
            [['ProjectId', 'ProjectAddress', 'ProjectDescription', 'Hyperlink', 'ClientProjectNumber', 'NetworkStatus', 'Notes'], 'string'],
            [['ProjectCategoryId', 'ClientId', 'StatusId'], 'integer'],
            [['ReceivedDate', 'DueDate'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProjectId' => 'TAN Number',
            'ProjectCategoryId' => 'Category',
            'ProjectAddress' => 'Address',
            'ProjectDescription' => 'Description',
            'Hyperlink' => 'Hyperlink',
            'ReceivedDate' => 'Received Date',
            'DueDate' => 'Due Date',
            'ClientId' => 'Client ID',
            'ClientProjectNumber' => 'Client Project Number',
            'NetworkStatus' => 'Network Status',
            'StatusId' => 'Status',
            'Notes' => 'Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDateFieldWorkCompletes()
    {
        return $this->hasMany(DateFieldWorkComplete::className(), ['ProjectId' => 'ProjectId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDateSiteVisits()
    {
        return $this->hasMany(DateSiteVisit::className(), ['ProjectId' => 'ProjectId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatePlansSubmitteds()
    {
        return $this->hasMany(DatePlansSubmitted::className(), ['ProjectId' => 'ProjectId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDateRevisedPlansSubmitteds()
    {
        return $this->hasMany(DateRevisedPlansSubmitted::className(), ['ProjectId' => 'ProjectId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatePoRequests()
    {
        return $this->hasMany(DatePoRequest::className(), ['ProjectId' => 'ProjectId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatePoApprovals()
    {
        return $this->hasMany(DatePoApproval::className(), ['ProjectId' => 'ProjectId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectCategory()
    {
        return $this->hasOne(ProjectCategory::className(), ['ProjectCategoryId' => 'ProjectCategoryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectEngineerings()
    {
        return $this->hasMany(ProjectEngineering::className(), ['ProjectId' => 'ProjectId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(ProjectEngineering::className(), ['ProjectId' => 'ProjectId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Client::className(), ['ClientId' => 'ClientId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['StatusId' => 'StatusId']);
    }


}
