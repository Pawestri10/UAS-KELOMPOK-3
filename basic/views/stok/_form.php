<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Stok $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="stok-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_stok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pemasok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_produk')->textInput() ?>

    <?= $form->field($model, 'id_karyawan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_kirim')->textInput() ?>

    <?= $form->field($model, 'jumlah_produk_masuk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
