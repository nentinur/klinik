<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DaftarPasien $model */

$this->title = 'Create Daftar Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
