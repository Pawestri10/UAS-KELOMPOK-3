<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Stok $model */

$this->title = 'Update Stok: ' . $model->id_stok;
$this->params['breadcrumbs'][] = ['label' => 'Stoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_stok, 'url' => ['view', 'id_stok' => $model->id_stok]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
