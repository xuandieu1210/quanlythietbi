<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ThietbiThuoctinh */

$this->title = 'Update Thietbi Thuoctinh: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Thietbi Thuoctinhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thietbi-thuoctinh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
