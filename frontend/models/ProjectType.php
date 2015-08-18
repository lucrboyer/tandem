<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "project_type".
 *
 * @property integer $ProjectTypeId
 * @property string $ProjectTypeName
 */
class ProjectType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectTypeId'], 'required'],
            [['ProjectTypeId'], 'integer'],
            [['ProjectTypeName'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProjectTypeId' => 'Project Type ID',
            'ProjectTypeName' => 'Project Type Name',
        ];
    }
}
