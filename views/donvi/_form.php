<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Donvi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donvi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_donvi')->textInput() ?>

    <?= $form->field($model, 'ten_donvi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diachi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cap')->textInput() ?>

    <?= $form->field($model, 'captren')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
