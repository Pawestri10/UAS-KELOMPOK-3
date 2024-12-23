<?php

use app\models\Detail;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DetailSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_detail',
            'id_produk',
            'jumlah_produk',
            'total_produk',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Detail $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_detail' => $model->id_detail]);
                 }
            ],
        ],
    ]); ?>


</div>
