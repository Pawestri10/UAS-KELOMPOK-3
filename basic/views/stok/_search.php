<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\StokSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="stok-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_stok') ?>

    <?= $form->field($model, 'id_pemasok') ?>

    <?= $form->field($model, 'id_produk') ?>

    <?= $form->field($model, 'id_karyawan') ?>

    <?= $form->field($model, 'tgl_kirim') ?>

    <?php // echo $form->field($model, 'jumlah_produk_masuk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
