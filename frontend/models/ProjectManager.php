<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "project_manager".
 *
 * @property integer $ProjectManagerId
 * @property string $ProjectManagerName
 */
class ProjectManager extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_manager';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectManagerId'], 'integer'],
            [['ProjectManagerName'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProjectManagerId' => 'Project Manager ID',
            'ProjectManagerName' => 'Project Manager Name',
        ];
    }
}
