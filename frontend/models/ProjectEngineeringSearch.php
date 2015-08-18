<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ProjectEngineering;

/**
 * ProjectEngineeringSearch represents the model behind the search form about `frontend\models\ProjectEngineering`.
 */
class ProjectEngineeringSearch extends ProjectEngineering
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'ProjectAddress', 'ProjectDescription', 'Hyperlink', 'ReceivedDate', 'DueDate', 'ClientProjectNumber', 'NetworkStatus', 'Status', 'Notes'], 'safe'],
            [['ProjectCategoryId', 'ClientId'], 'integer'],
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
        $query = ProjectEngineering::find();  //->with('ProjectCategory');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ProjectCategoryId' => $this->ProjectCategoryId,
            'ReceivedDate' => $this->ReceivedDate,
            'DueDate' => $this->DueDate,
            'ClientId' => $this->ClientId,
        ]);

        $query->andFilterWhere(['like', 'ProjectId', $this->ProjectId])
            ->andFilterWhere(['like', 'ProjectAddress', $this->ProjectAddress])
            ->andFilterWhere(['like', 'ProjectDescription', $this->ProjectDescription])
            ->andFilterWhere(['like', 'Hyperlink', $this->Hyperlink])
            ->andFilterWhere(['like', 'ClientProjectNumber', $this->ClientProjectNumber])
            ->andFilterWhere(['like', 'NetworkStatus', $this->NetworkStatus])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Notes', $this->Notes]);

        return $dataProvider;
    }
}
