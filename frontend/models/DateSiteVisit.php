<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "date_site_visit".
 *
 * @property string $ProjectId
 * @property integer $ProjectCategoryId
 * @property string $SiteVisitDate
 * @property string $SiteVisitNotes
 *
 * @property ProjectEngineering $projectCategory
 * @property ProjectEngineering $project
 */
class DateSiteVisit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'date_site_visit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'ProjectCategoryId', 'SiteVisitDate'], 'required'],
            [['ProjectId', 'SiteVisitNotes'], 'string'],
            [['ProjectCategoryId'], 'integer'],
            [['SiteVisitDate'], 'safe']
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
            'SiteVisitDate' => 'Site Visit Date',
            'SiteVisitNotes' => 'Site Visit Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectCategory()
    {
        return $this->hasOne(ProjectEngineering::className(), ['ProjectCategoryId' => 'ProjectCategoryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(ProjectEngineering::className(), ['ProjectId' => 'ProjectId']);
    }
}
