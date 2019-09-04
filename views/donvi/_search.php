<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DonviSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donvi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_donvi') ?>

    <?= $form->field($model, 'ten_donvi') ?>

    <?= $form->field($model, 'diachi') ?>

    <?= $form->field($model, 'cap') ?>

    <?= $form->field($model, 'captren') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
