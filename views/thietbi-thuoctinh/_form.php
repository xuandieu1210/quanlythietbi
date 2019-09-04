<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ThietbiThuoctinh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thietbi-thuoctinh-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_thietbi')->textInput() ?>

    <?= $form->field($model, 'id_thuoctinh')->textInput() ?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
