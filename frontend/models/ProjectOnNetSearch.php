<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ProjectOnNet;

/**
 * ProjectOnNetSearch represents the model behind the search form about `frontend\models\ProjectOnNet`.
 */
class ProjectOnNetSearch extends ProjectOnNet
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'PlansRequested', 'AsBuiltPlansRequested', 'Company', 'Name', 'EmailAddress', 'PhoneNumber'], 'safe'],
            [['ProjectCategoryId', 'ProjectManagerId', 'ProjectTypeId', 'SpatialRequired', 'NumberOfFloors', 'EmailToPmRequired'], 'integer'],
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
        $query = ProjectOnNet::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ProjectCategoryId' => $this->ProjectCategoryId,
            'ProjectManagerId' => $this->ProjectManagerId,
            'ProjectTypeId' => $this->ProjectTypeId,
            'SpatialRequired' => $this->SpatialRequired,
            'NumberOfFloors' => $this->NumberOfFloors,
            'PlansRequested' => $this->PlansRequested,
            'AsBuiltPlansRequested' => $this->AsBuiltPlansRequested,
            'EmailToPmRequired' => $this->EmailToPmRequired,
        ]);

        $query->andFilterWhere(['like', 'ProjectId', $this->ProjectId])
            ->andFilterWhere(['like', 'Company', $this->Company])
            ->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'EmailAddress', $this->EmailAddress])
            ->andFilterWhere(['like', 'PhoneNumber', $this->PhoneNumber]);

        return $dataProvider;
    }
}
