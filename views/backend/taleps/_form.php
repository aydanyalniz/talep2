<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\talep2\models\Taleps */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taleps-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'Izin Turu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gun Sayisi')->textInput() ?>

    <?= $form->field($model, 'Baslangic Tarihi')->textInput() ?>

    <?= $form->field($model, 'Bitis Tarihi')->textInput() ?>

    <?= $form->field($model, 'Aciklama')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Adres')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
