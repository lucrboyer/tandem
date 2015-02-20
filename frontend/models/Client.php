<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $ClientId
 * @property string $ClientName
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ClientId'], 'required'],
            [['ClientId'], 'integer'],
            [['ClientName'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ClientId' => 'Client ID',
            'ClientName' => 'Client Name',
        ];
    }
}
