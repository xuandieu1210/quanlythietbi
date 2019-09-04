<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dotkiemke */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dotkiemke-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten_dot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_tram')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
