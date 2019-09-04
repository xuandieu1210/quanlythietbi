<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Thietbi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thietbi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten_thietbi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_nhom')->textInput() ?>

    <?= $form->field($model, 'id_tram')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
