<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nhomthietbi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhomthietbi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten_nhom')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
