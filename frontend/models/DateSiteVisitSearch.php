<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DateSiteVisit;

/**
 * DateSiteVisitSearch represents the model behind the search form about `frontend\models\DateSiteVisit`.
 */
class DateSiteVisitSearch extends DateSiteVisit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'SiteVisitDate', 'SiteVisitNotes'], 'safe'],
            [['ProjectCategoryId'], 'integer'],
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
        $query = DateSiteVisit::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ProjectCategoryId' => $this->ProjectCategoryId,
            'SiteVisitDate' => $this->SiteVisitDate,
        ]);

        $query->andFilterWhere(['like', 'ProjectId', $this->ProjectId])
            ->andFilterWhere(['like', 'SiteVisitNotes', $this->SiteVisitNotes]);

        return $dataProvider;
    }
}
