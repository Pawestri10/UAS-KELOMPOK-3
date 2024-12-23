<?php

use app\models\Stok;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\StokSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Stoks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Stok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_stok',
            'id_pemasok',
            'id_produk',
            'id_karyawan',
            'tgl_kirim',
            //'jumlah_produk_masuk',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Stok $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_stok' => $model->id_stok]);
                 }
            ],
        ],
    ]); ?>


</div>
