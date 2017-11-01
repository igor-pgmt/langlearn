<?php

namespace frontend\controllers;

use frontend\models\Phrase;
use frontend\models\Phrasebook;
use frontend\models\PhrasebookSearch;
use frontend\models\PhraseSearch;
use Yii;
use yii\data\ArrayDataProvider;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * PhrasebookController implements the CRUD actions for Phrasebook model.
 */
class PhrasebookController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Phrasebook models.
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new PhrasebookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Phrasebook model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $model->phrases = json_decode($model->phrases, true);
        $myModels = [];

        if (null !== Yii::$app->request->get('PhraseSearch')) {
            if (('' !== Yii::$app->request->get('PhraseSearch')['header']) || ('' !== Yii::$app->request->get('PhraseSearch')['phrase']) || ('' !== Yii::$app->request->get('PhraseSearch')['translation'])) {
                foreach ($model->phrases as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $str = strtolower(Yii::$app->request->get('PhraseSearch')[$key2]);
                        if (empty($str)) {
                            $str = 666;
                        }

                        $string = strtolower($value2);

                        if (substr_count($string, $str) > 0) {
                            ;
                            $myModels[] = $value;
                            break;}

                    }
                }
            } else { $myModels = $model->phrases;}
        } else { $myModels = $model->phrases;}

        $phraseSearch = new PhraseSearch();

        $provider = new ArrayDataProvider([
            'allModels' => $myModels,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'attributes' => ['header', 'phrase', 'translation'],
            ],
        ]);
        return $this->render('view', [
            'model' => $model,
            'dataProvider' => $provider,
            'searchModel' => $phraseSearch,
        ]);
    }

    /**
     * Creates a new Phrasebook model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Phrasebook();

        if ($model->load(Yii::$app->request->post())) {
            $model->phrases = json_encode($model->phrases, JSON_UNESCAPED_UNICODE);
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Phrasebook model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            $model->phrases = json_encode($model->phrases, JSON_UNESCAPED_UNICODE);
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->phrases = json_decode($model->phrases, true);
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Phrasebook model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Phrasebook model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Phrasebook the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Phrasebook::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
