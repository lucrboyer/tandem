<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "date_revised_plans_submitted".
 *
 * @property string $ProjectId
 * @property integer $ProjectCategoryId
 * @property string $RevisedPlansSubmittedDate
 * @property string $RevisedPlansSubmittedNotes
 *
 * @property ProjectEngineering $projectCategory
 * @property ProjectEngineering $project
 */
class DateRevisedPlansSubmitted extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'date_revised_plans_submitted';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'ProjectCategoryId', 'RevisedPlansSubmittedDate'], 'required'],
            [['ProjectId', 'RevisedPlansSubmittedNotes'], 'string'],
            [['ProjectCategoryId'], 'integer'],
            [['RevisedPlansSubmittedDate'], 'safe']
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
            'RevisedPlansSubmittedDate' => 'Revised Plans Submitted Date',
            'RevisedPlansSubmittedNotes' => 'Revised Plans Submitted Notes',
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
