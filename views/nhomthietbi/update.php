<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nhomthietbi */

$this->title = 'Update Nhomthietbi: ' . $model->id_nhom;
$this->params['breadcrumbs'][] = ['label' => 'Nhomthietbis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_nhom, 'url' => ['view', 'id' => $model->id_nhom]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nhomthietbi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
