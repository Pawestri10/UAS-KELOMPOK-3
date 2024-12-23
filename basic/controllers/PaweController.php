<?php

namespace app\controllers;

use app\models\Pawe;
use app\models\PaweSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PaweController implements the CRUD actions for Pawe model.
 */
class PaweController extends Controller
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
     * Lists all Pawe models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PaweSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pawe model.
     * @param int $id_pawe Id Pawe
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pawe)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pawe),
        ]);
    }

    /**
     * Creates a new Pawe model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pawe();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pawe' => $model->id_pawe]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pawe model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_pawe Id Pawe
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pawe)
    {
        $model = $this->findModel($id_pawe);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pawe' => $model->id_pawe]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pawe model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_pawe Id Pawe
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pawe)
    {
        $this->findModel($id_pawe)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pawe model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_pawe Id Pawe
     * @return Pawe the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pawe)
    {
        if (($model = Pawe::findOne(['id_pawe' => $id_pawe])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
