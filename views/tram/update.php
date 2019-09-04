<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tram */

$this->title = 'Update Tram: ' . $model->id_tram;
$this->params['breadcrumbs'][] = ['label' => 'Trams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tram, 'url' => ['view', 'id' => $model->id_tram]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tram-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
