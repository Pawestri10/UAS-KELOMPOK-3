<?php

use app\models\Karyawan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\KaryawanSearchapp $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Karyawans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karyawan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Karyawan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_karyawan',
            'nama_depan',
            'nama_belakang',
            'jenis_kelamin',
            'alamat_karyawan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Karyawan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_karyawan' => $model->id_karyawan]);
                 }
            ],
        ],
    ]); ?>


</div>
