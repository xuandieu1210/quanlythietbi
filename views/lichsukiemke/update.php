<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lichsukiemke */

$this->title = 'Update Lichsukiemke: ' . $model->id_lichsu;
$this->params['breadcrumbs'][] = ['label' => 'Lichsukiemkes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lichsu, 'url' => ['view', 'id' => $model->id_lichsu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lichsukiemke-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
