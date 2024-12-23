<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pawe $model */

$this->title = 'Update Pawe: ' . $model->id_pawe;
$this->params['breadcrumbs'][] = ['label' => 'Pawes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pawe, 'url' => ['view', 'id_pawe' => $model->id_pawe]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pawe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
