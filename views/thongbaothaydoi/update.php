<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Thongbaothaydoi */

$this->title = 'Update Thongbaothaydoi: ' . $model->id_thongbao;
$this->params['breadcrumbs'][] = ['label' => 'Thongbaothaydois', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_thongbao, 'url' => ['view', 'id' => $model->id_thongbao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thongbaothaydoi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
