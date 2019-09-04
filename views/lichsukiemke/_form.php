<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lichsukiemke */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lichsukiemke-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_thietbi')->textInput() ?>

    <?= $form->field($model, 'id_dot')->textInput() ?>

    <?= $form->field($model, 'ghichu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
