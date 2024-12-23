<?php

namespace app\controllers;

use app\models\Pemasok;
use app\models\PemasokSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PemasokController implements the CRUD actions for Pemasok model.
 */
class PemasokController extends Controller
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
     * Lists all Pemasok models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PemasokSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pemasok model.
     * @param string $id_pemasok Id Pemasok
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pemasok)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pemasok),
        ]);
    }

    /**
     * Creates a new Pemasok model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pemasok();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pemasok' => $model->id_pemasok]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pemasok model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_pemasok Id Pemasok
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pemasok)
    {
        $model = $this->findModel($id_pemasok);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pemasok' => $model->id_pemasok]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pemasok model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_pemasok Id Pemasok
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pemasok)
    {
        $this->findModel($id_pemasok)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pemasok model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_pemasok Id Pemasok
     * @return Pemasok the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pemasok)
    {
        if (($model = Pemasok::findOne(['id_pemasok' => $id_pemasok])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
