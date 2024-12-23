<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pawe $model */

$this->title = $model->id_pawe;
$this->params['breadcrumbs'][] = ['label' => 'Pawes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pawe-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pawe' => $model->id_pawe], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pawe' => $model->id_pawe], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pawe',
            'nama_pawe',
        ],
    ]) ?>

</div>
