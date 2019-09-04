<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nhomthietbi */

$this->title = 'Create Nhomthietbi';
$this->params['breadcrumbs'][] = ['label' => 'Nhomthietbis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhomthietbi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
