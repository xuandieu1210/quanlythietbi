<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Thuoctinh */

$this->title = 'Create Thuoctinh';
$this->params['breadcrumbs'][] = ['label' => 'Thuoctinhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thuoctinh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
