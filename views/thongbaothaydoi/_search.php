<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ThongbaothaydoiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thongbaothaydoi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_thongbao') ?>

    <?= $form->field($model, 'id_thietbi') ?>

    <?= $form->field($model, 'id_tramnguon') ?>

    <?= $form->field($model, 'id_tramdich') ?>

    <?= $form->field($model, 'noidung') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
