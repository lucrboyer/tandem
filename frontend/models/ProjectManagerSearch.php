<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ProjectManager;

/**
 * ProjectManagerSearch represents the model behind the search form about `frontend\models\ProjectManager`.
 */
class ProjectManagerSearch extends ProjectManager
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectManagerId'], 'integer'],
            [['ProjectManagerName'], 'safe'],
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
        $query = ProjectManager::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ProjectManagerId' => $this->ProjectManagerId,
        ]);

        $query->andFilterWhere(['like', 'ProjectManagerName', $this->ProjectManagerName]);

        return $dataProvider;
    }
}
