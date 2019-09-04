<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Thuoctinh */

$this->title = 'Update Thuoctinh: ' . $model->id_thuoctinh;
$this->params['breadcrumbs'][] = ['label' => 'Thuoctinhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_thuoctinh, 'url' => ['view', 'id' => $model->id_thuoctinh]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thuoctinh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
