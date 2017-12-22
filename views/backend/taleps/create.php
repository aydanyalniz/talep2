<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model vendor\kouosl\talep2\models\Taleps */

$this->title = 'Create Taleps';
$this->params['breadcrumbs'][] = ['label' => 'Taleps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taleps-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
