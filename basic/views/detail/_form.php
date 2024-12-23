<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Detail $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_produk')->textInput() ?>

    <?= $form->field($model, 'jumlah_produk')->textInput() ?>

    <?= $form->field($model, 'total_produk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
