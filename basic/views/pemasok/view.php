<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pemasok $model */

$this->title = $model->id_pemasok;
$this->params['breadcrumbs'][] = ['label' => 'Pemasoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pemasok-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pemasok' => $model->id_pemasok], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pemasok' => $model->id_pemasok], [
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
            'id_pemasok',
            'nama_pemasok',
            'asal_pemasok',
            'tlp_pemasok',
        ],
    ]) ?>

</div>
