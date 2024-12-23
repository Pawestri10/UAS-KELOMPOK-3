<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pemasok $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemasok-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pemasok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pemasok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asal_pemasok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tlp_pemasok')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
