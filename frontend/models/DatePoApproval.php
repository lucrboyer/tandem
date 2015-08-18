<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "date_po_approval".
 *
 * @property string $ProjectId
 * @property integer $ProjectCategoryId
 * @property string $PoApprovalDate
 * @property string $PoApprovalNotes
 *
 * @property ProjectEngineering $projectCategory
 * @property ProjectEngineering $project
 */
class DatePoApproval extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'date_po_approval';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'ProjectCategoryId', 'PoApprovalDate'], 'required'],
            [['ProjectId', 'PoApprovalNotes'], 'string'],
            [['ProjectCategoryId'], 'integer'],
            [['PoApprovalDate'], 'safe']
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
            'PoApprovalDate' => 'Po Approval Date',
            'PoApprovalNotes' => 'Po Approval Notes',
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
