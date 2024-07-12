<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TransaksiObat $model */

$this->title = 'Create Transaksi Obat';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
