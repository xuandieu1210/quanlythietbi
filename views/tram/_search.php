<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tram-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_tram') ?>

    <?= $form->field($model, 'ten_tram') ?>

    <?= $form->field($model, 'diachi') ?>

    <?= $form->field($model, 'id_donvi') ?>

    <?= $form->field($model, 'quanly') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
