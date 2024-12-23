<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Stok $model */

$this->title = 'Create Stok';
$this->params['breadcrumbs'][] = ['label' => 'Stoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
