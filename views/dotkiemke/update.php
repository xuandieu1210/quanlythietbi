<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dotkiemke */

$this->title = 'Update Dotkiemke: ' . $model->id_dot;
$this->params['breadcrumbs'][] = ['label' => 'Dotkiemkes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dot, 'url' => ['view', 'id' => $model->id_dot]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dotkiemke-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
