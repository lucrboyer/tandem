<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ProjectOffNet;

/**
 * ProjectOffNetSearch represents the model behind the search form about `frontend\models\ProjectOffNet`.
 */
class ProjectOffNetSearch extends ProjectOffNet
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProjectId', 'AllstreamRequest', 'AllstreamReceived', 'BellCanadaRequest', 'BellCanadaReceived', 'HydroOneRequest', 'HydroOneReceived', 'RogersRequest', 'RogersReceived', 'CRPlansRequest', 'CRPlansReceived', 'LocatesRequest', 'LocatesReceived', 'SpatialComplete', 'PrivateConsentPlanSubmitted', 'PrivateConsentPlanReceived', 'Company', 'Name', 'EmailAddress', 'PhoneNumber', 'DoorKnockingComplete', 'PMEmail1', 'PMEmail2', 'PMEmail3', 'PMApprovalReceived', 'MunicipalConsent'], 'safe'],
            [['ProjectCategoryId', 'ProjectManagerId', 'ProjectTypeId', 'ApproximateAerialDistance', 'ApproximateUndergroundDistance', 'ExistingPermitRequired', 'CRPlansRequired', 'LocatesRequired', 'SpatialRequired', 'SitePlanRequired', 'NumberOfFloors', 'PrivateConsentRequired'], 'integer'],
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
        $query = ProjectOffNet::find();

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
            'ApproximateAerialDistance' => $this->ApproximateAerialDistance,
            'ApproximateUndergroundDistance' => $this->ApproximateUndergroundDistance,
            'ExistingPermitRequired' => $this->ExistingPermitRequired,
            'AllstreamRequest' => $this->AllstreamRequest,
            'AllstreamReceived' => $this->AllstreamReceived,
            'BellCanadaRequest' => $this->BellCanadaRequest,
            'BellCanadaReceived' => $this->BellCanadaReceived,
            'HydroOneRequest' => $this->HydroOneRequest,
            'HydroOneReceived' => $this->HydroOneReceived,
            'RogersRequest' => $this->RogersRequest,
            'RogersReceived' => $this->RogersReceived,
            'CRPlansRequired' => $this->CRPlansRequired,
            'CRPlansRequest' => $this->CRPlansRequest,
            'CRPlansReceived' => $this->CRPlansReceived,
            'LocatesRequired' => $this->LocatesRequired,
            'LocatesRequest' => $this->LocatesRequest,
            'LocatesReceived' => $this->LocatesReceived,
            'SpatialRequired' => $this->SpatialRequired,
            'SpatialComplete' => $this->SpatialComplete,
            'SitePlanRequired' => $this->SitePlanRequired,
            'NumberOfFloors' => $this->NumberOfFloors,
            'PrivateConsentRequired' => $this->PrivateConsentRequired,
            'PrivateConsentPlanSubmitted' => $this->PrivateConsentPlanSubmitted,
            'PrivateConsentPlanReceived' => $this->PrivateConsentPlanReceived,
            'DoorKnockingComplete' => $this->DoorKnockingComplete,
            'PMEmail1' => $this->PMEmail1,
            'PMEmail2' => $this->PMEmail2,
            'PMEmail3' => $this->PMEmail3,
            'PMApprovalReceived' => $this->PMApprovalReceived,
        ]);

        $query->andFilterWhere(['like', 'ProjectId', $this->ProjectId])
            ->andFilterWhere(['like', 'Company', $this->Company])
            ->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'EmailAddress', $this->EmailAddress])
            ->andFilterWhere(['like', 'PhoneNumber', $this->PhoneNumber])
            ->andFilterWhere(['like', 'MunicipalConsent', $this->MunicipalConsent]);

        return $dataProvider;
    }
}
