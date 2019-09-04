<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tram */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tram-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten_tram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diachi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_donvi')->textInput() ?>

    <?= $form->field($model, 'quanly')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
