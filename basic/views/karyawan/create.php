<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Karyawan $model */

$this->title = 'Create Karyawan';
$this->params['breadcrumbs'][] = ['label' => 'Karyawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karyawan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
