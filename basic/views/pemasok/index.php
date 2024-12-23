<?php

use app\models\Pemasok;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PemasokSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemasoks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemasok-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemasok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pemasok',
            'nama_pemasok',
            'asal_pemasok',
            'tlp_pemasok',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pemasok $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pemasok' => $model->id_pemasok]);
                 }
            ],
        ],
    ]); ?>


</div>
