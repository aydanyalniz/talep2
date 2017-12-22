<?php

namespace vendor\kouosl\talep2\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\kouosl\talep2\models\Taleps;

/**
 * TalepsSearch represents the model behind the search form about `vendor\kouosl\talep2\models\Taleps`.
 */
class TalepsSearch extends Taleps
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Gun Sayisi'], 'integer'],
            [['Izin Turu', 'Baslangic Tarihi', 'Bitis Tarihi', 'Aciklama', 'Adres'], 'safe'],
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
        $query = Taleps::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Gun Sayisi' => $this->Gun Sayisi,
            'Baslangic Tarihi' => $this->Baslangic Tarihi,
            'Bitis Tarihi' => $this->Bitis Tarihi,
        ]);

        $query->andFilterWhere(['like', 'Izin Turu', $this->Izin Turu])
            ->andFilterWhere(['like', 'Aciklama', $this->Aciklama])
            ->andFilterWhere(['like', 'Adres', $this->Adres]);

        return $dataProvider;
    }
}
