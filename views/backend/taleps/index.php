<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\talep2\models\TalepsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Taleps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taleps-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Taleps', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Izin Turu',
            'Gun Sayisi',
            'Baslangic Tarihi',
            'Bitis Tarihi',
            // 'Aciklama:ntext',
            // 'Adres',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
