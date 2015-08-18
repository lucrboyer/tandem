<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "date_field_work_complete".
 *
 * @property string $ProjectId
 * @property integer $ProjectCategoryId
 * @property string $FieldWorkCompleteDate
 * @property string $FieldWorkCompleteNotes
 *
 * @property ProjectEngineering $projectCategory
 * @property ProjectEngineering $project
 */
class DateFieldWorkComplete extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'date_field_work_complete';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'ProjectCategoryId', 'FieldWorkCompleteDate'], 'required'],
            [['ProjectId', 'FieldWorkCompleteNotes'], 'string'],
            [['ProjectCategoryId'], 'integer'],
            [['FieldWorkCompleteDate'], 'safe']
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
            'FieldWorkCompleteDate' => 'Field Work Complete Date',
            'FieldWorkCompleteNotes' => 'Field Work Complete Notes',
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
