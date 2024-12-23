<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PemasokSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemasok-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pemasok') ?>

    <?= $form->field($model, 'nama_pemasok') ?>

    <?= $form->field($model, 'asal_pemasok') ?>

    <?= $form->field($model, 'tlp_pemasok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
