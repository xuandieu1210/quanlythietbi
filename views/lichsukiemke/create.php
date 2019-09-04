<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lichsukiemke */

$this->title = 'Create Lichsukiemke';
$this->params['breadcrumbs'][] = ['label' => 'Lichsukiemkes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lichsukiemke-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
