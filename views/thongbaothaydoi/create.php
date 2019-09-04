<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Thongbaothaydoi */

$this->title = 'Create Thongbaothaydoi';
$this->params['breadcrumbs'][] = ['label' => 'Thongbaothaydois', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thongbaothaydoi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
