<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\talep2\models\TalepsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taleps-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Izin Turu') ?>

    <?= $form->field($model, 'Gun Sayisi') ?>

    <?= $form->field($model, 'Baslangic Tarihi') ?>

    <?= $form->field($model, 'Bitis Tarihi') ?>

    <?php // echo $form->field($model, 'Aciklama') ?>

    <?php // echo $form->field($model, 'Adres') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
