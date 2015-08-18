<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ProjectCategory;

/**
 * ProjectCategorySearch represents the model behind the search form about `frontend\models\ProjectCategory`.
 */
class ProjectCategorySearch extends ProjectCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectCategoryId'], 'integer'],
            [['ProjectCategoryName'], 'safe'],
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
        $query = ProjectCategory::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ProjectCategoryId' => $this->ProjectCategoryId,
        ]);

        $query->andFilterWhere(['like', 'ProjectCategoryName', $this->ProjectCategoryName]);

        return $dataProvider;
    }
}
