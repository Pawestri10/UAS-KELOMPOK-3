<?php

namespace app\controllers;

use app\models\Stok;
use app\models\StokSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StokController implements the CRUD actions for Stok model.
 */
class StokController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Stok models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new StokSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Stok model.
     * @param string $id_stok Id Stok
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_stok)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_stok),
        ]);
    }

    /**
     * Creates a new Stok model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Stok();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_stok' => $model->id_stok]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Stok model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_stok Id Stok
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_stok)
    {
        $model = $this->findModel($id_stok);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_stok' => $model->id_stok]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Stok model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_stok Id Stok
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_stok)
    {
        $this->findModel($id_stok)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Stok model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_stok Id Stok
     * @return Stok the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_stok)
    {
        if (($model = Stok::findOne(['id_stok' => $id_stok])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
