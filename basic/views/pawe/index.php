<?php

use app\models\Pawe;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PaweSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pawes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pawe-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pawe', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pawe',
            'nama_pawe',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pawe $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pawe' => $model->id_pawe]);
                 }
            ],
        ],
    ]); ?>


</div>
