<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Thongbaothaydoi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thongbaothaydoi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_thietbi')->textInput() ?>

    <?= $form->field($model, 'id_tramnguon')->textInput() ?>

    <?= $form->field($model, 'id_tramdich')->textInput() ?>

    <?= $form->field($model, 'noidung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
