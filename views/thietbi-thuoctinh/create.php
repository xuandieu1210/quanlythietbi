<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ThietbiThuoctinh */

$this->title = 'Create Thietbi Thuoctinh';
$this->params['breadcrumbs'][] = ['label' => 'Thietbi Thuoctinhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thietbi-thuoctinh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
