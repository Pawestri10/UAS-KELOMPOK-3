<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pawe $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pawe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pawe')->textInput() ?>

    <?= $form->field($model, 'nama_pawe')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
