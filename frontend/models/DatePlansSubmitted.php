<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "date_plans_submitted".
 *
 * @property string $ProjectId
 * @property integer $ProjectCategoryId
 * @property string $PlansSubmittedDate
 * @property string $PlansSubmittedNotes
 *
 * @property ProjectEngineering $projectCategory
 * @property ProjectEngineering $project
 */
class DatePlansSubmitted extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'date_plans_submitted';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'ProjectCategoryId', 'PlansSubmittedDate'], 'required'],
            [['ProjectId', 'PlansSubmittedNotes'], 'string'],
            [['ProjectCategoryId'], 'integer'],
            [['PlansSubmittedDate'], 'safe']
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
            'PlansSubmittedDate' => 'Plans Submitted Date',
            'PlansSubmittedNotes' => 'Plans Submitted Notes',
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
