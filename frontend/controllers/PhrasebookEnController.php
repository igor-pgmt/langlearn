<?php

namespace frontend\controllers;

use frontend\models\PhrasebookEn;
use frontend\models\PhrasebookEnSearch;
use Yii;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * PhrasebookEnController implements the CRUD actions for PhrasebookEn model.
 */
class PhrasebookEnController extends LoginController
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

    public function beforeAction($action)
    {
        parent::logincheck();
        return true;
    }

    /**
     * Lists all PhrasebookEn models.
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new PhrasebookEnSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if (\Yii::$app->request->isAjax) {
            //$data = Yii::$app->request->post();
            //$filter = $data['filter'];
            // $qp = Yii::$app->request->queryParams;
            // $qp['PhrasebookEnSearch']['russian'] = $filter;
            // $dataProvider = $searchModel->search($qp);
            //  \Yii::$app->response->format = Response::FORMAT_JSON;
            //$dataProvider = $searchModel->search(['PhrasebookEnSearch' => ['russian' => $filter]]);

            // return $dataProvider;
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $searchModel,
            'phrases' => $this->getPhrases(),

        ]);

    }

    /**
     * Displays a single PhrasebookEn model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PhrasebookEn model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PhrasebookEn();

        if ($model->load(Yii::$app->request->post())) {
            // $model->topic = json_encode($model->topic, JSON_UNESCAPED_UNICODE);
            // $model->header = json_encode($model->header, JSON_UNESCAPED_UNICODE);
            // $model->serbian = json_encode($model->serbian, JSON_UNESCAPED_UNICODE);
            // $model->russian = json_encode($model->russian, JSON_UNESCAPED_UNICODE);
            // $model->english = json_encode($model->english, JSON_UNESCAPED_UNICODE);

            if (empty($model->header)) {
                $model->header = '[no header]';
            }

            $model->save();

            do {
                //Этот блок отвечает за сохранение данных в форме, когда нажимаем кнопку "Ещё",
                //В нём вы обнуляем те поля, которые не хотим видеть в форме заполненными
                if (isset($_POST['new'])) {

                    $model->serbian = '';
                    $model->russian = '';
                    $model->english = '';
                    $model->comment = '';
                    $model->isNewRecord = true;

                    return $this->render('create', [
                        'model' => $model,
                        'phrases' => $this->getPhrases(),
                        'header' => [$model->header => $model->header],
                    ]);
                    break;
                } else {
                    return $this->redirect(['phrasebookEn/index']);
                }

            } while (0);

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'phrases' => $this->getPhrases(),
                'header' => null,
            ]);
        }
    }

    /**
     * Updates an existing PhrasebookEn model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            // $model->topic = json_encode($model->topic, JSON_UNESCAPED_UNICODE);
            // $model->header = json_encode($model->header, JSON_UNESCAPED_UNICODE);
            // $model->serbian = json_encode($model->serbian, JSON_UNESCAPED_UNICODE);
            // $model->russian = json_encode($model->russian, JSON_UNESCAPED_UNICODE);
            // $model->english = json_encode($model->english, JSON_UNESCAPED_UNICODE);

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            // $model->topic = json_decode($model->topic, true);
            // $model->header = json_decode($model->header, true);
            // $model->serbian = json_decode($model->serbian);
            // $model->russian = json_decode($model->russian, true);
            // $model->english = json_decode($model->english, true);

            return $this->render('update', [
                'model' => $model,
                'phrases' => $this->getPhrases(),
                'header' => [$model->header => $model->header],
            ]);
        }
    }

    /**
     * Deletes an existing PhrasebookEn model.
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
     * Finds the PhrasebookEn model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PhrasebookEn the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PhrasebookEn::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSubcat()
    {

        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $cat_id = $parents[0];
                // $out = self::getSubCatList($cat_id);

                $output = ArrayHelper::map(
                    PhrasebookEn::find()
                    // ->Where(['topic' => json_encode($cat_id, JSON_UNESCAPED_UNICODE)])
                        ->Where(['topic' => $cat_id])
                        ->all(),
                    'id', 'header');
                asort($output);

                foreach ($output as $value) {
                    // $out[] = ['id' => json_decode($value), 'name' => json_decode($value)];
                    // $value2 = $value ? $value : '[Нет подзаголовка]';

                    $out[] = ['id' => $value, 'name' => $value];
                }
                // ksort($out);
                $out = array_map("unserialize", array_unique(array_map("serialize", $out)));
                // asort($out);
                // the getSubCatList function will query the database based on the
                // cat_id and return an array like below:
                // [
                //    ['id'=>'<sub-cat-id-1>', 'name'=>'<sub-cat-name1>'],
                //    ['id'=>'<sub-cat_id_2>', 'name'=>'<sub-cat-name2>']
                // ]
                echo Json::encode(['output' => $out, 'selected' => '']);
                return;
            }
        }
        echo Json::encode(['output' => '', 'selected' => '']);
    }

    private function getPhrases()
    {
        $phrasesLang = PhrasebookEn::find()->select(['russian', 'serbian', 'english', 'topic'])->all();

        foreach ($phrasesLang as $phrase) {

            foreach ($phrase as $key => $value) {
                if ($value) {
                    $phrases[$key][] = $value;
                    // $phrases[$key][] = json_decode($value);
                }
            }

        }

        if (isset($phrases)) {
            asort($phrases['topic']);
            asort($phrases['serbian']);
            asort($phrases['russian']);
            asort($phrases['english']);

            $topic = isset($phrases['topic']) ? array_combine($phrases['topic'], $phrases['topic']) : [];
            $serbian = isset($phrases['serbian']) ? array_combine($phrases['serbian'], $phrases['serbian']) : [];
            $russian = isset($phrases['russian']) ? array_combine($phrases['russian'], $phrases['russian']) : [];
            $english = isset($phrases['english']) ? array_combine($phrases['english'], $phrases['english']) : [];
        } else {
            $topic = [];
            $serbian = [];
            $russian = [];
            $english = [];
        }

        return ['sr' => $serbian, 'ru' => $russian, 'en' => $english, 'topic' => $topic];
    }

    public function actionTest()
    {
        $output = ArrayHelper::map(
            PhrasebookEn::find()
                ->Where(['topic' => 'Економика (экономика)'])
                ->all(),
            'id', 'header');

        foreach ($output as $value) {
            // $out[] = ['id' => json_decode($value), 'name' => json_decode($value)];
            $value2 = $value ? $value : '[Нет подзаголовка]';
            $out[] = ['id' => $value, 'name' => $value2];
        }
        $out = array_map("unserialize", array_unique(array_map("serialize", $out)));
        echo '<br /><br /><br />→';
        print_r($out);
        echo '←';exit;
    }
}
