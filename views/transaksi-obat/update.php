<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TransaksiObat $model */

$this->title = 'Update Transaksi Obat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
