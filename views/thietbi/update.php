<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Thietbi */

$this->title = 'Update Thietbi: ' . $model->id_thietbi;
$this->params['breadcrumbs'][] = ['label' => 'Thietbis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_thietbi, 'url' => ['view', 'id' => $model->id_thietbi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thietbi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
