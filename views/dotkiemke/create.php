<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dotkiemke */

$this->title = 'Create Dotkiemke';
$this->params['breadcrumbs'][] = ['label' => 'Dotkiemkes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dotkiemke-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
