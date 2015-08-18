<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $StatusId
 * @property string $Status
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['StatusId'], 'required'],
            [['StatusId'], 'integer'],
            [['Status'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'StatusId' => 'Status ID',
            'Status' => 'Status',
        ];
    }
}
