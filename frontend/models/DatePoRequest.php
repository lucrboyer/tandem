<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "date_po_request".
 *
 * @property string $ProjectId
 * @property integer $ProjectCategoryId
 * @property string $PoRequestDate
 * @property string $PoRequestNotes
 *
 * @property ProjectEngineering $projectCategory
 * @property ProjectEngineering $project
 */
class DatePoRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'date_po_request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'ProjectCategoryId', 'PoRequestDate'], 'required'],
            [['ProjectId', 'PoRequestNotes'], 'string'],
            [['ProjectCategoryId'], 'integer'],
            [['PoRequestDate'], 'safe']
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
            'PoRequestDate' => 'Po Request Date',
            'PoRequestNotes' => 'Po Request Notes',
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
