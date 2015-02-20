<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "project_category".
 *
 * @property integer $ProjectCategoryId
 * @property string $ProjectCategoryName
 *
 * @property ProjectEngineering[] $projectEngineerings
 */
class ProjectCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectCategoryId', 'ProjectCategoryName'], 'required'],
            [['ProjectCategoryId'], 'integer'],
            [['ProjectCategoryName'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProjectCategoryId' => 'Project Category ID',
            'ProjectCategoryName' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectEngineerings()
    {
        return $this->hasMany(ProjectEngineering::className(), ['ProjectCategoryId' => 'ProjectCategoryId']);
    }
}
