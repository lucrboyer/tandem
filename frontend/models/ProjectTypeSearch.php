<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ProjectType;

/**
 * ProjectTypeSearch represents the model behind the search form about `frontend\models\ProjectType`.
 */
class ProjectTypeSearch extends ProjectType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectTypeId'], 'integer'],
            [['ProjectTypeName'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProjectType::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ProjectTypeId' => $this->ProjectTypeId,
        ]);

        $query->andFilterWhere(['like', 'ProjectTypeName', $this->ProjectTypeName]);

        return $dataProvider;
    }
}
