<?php

namespace frontend\controllers;

use frontend\models\Phrasebook2;
use frontend\models\Tag1;
use frontend\models\Verb;
use frontend\models\VerbSearch;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * VerbController implements the CRUD actions for Verb model.
 */
class VerbController extends LoginController
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
     * Lists all Verb models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VerbSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
    }

    /**
     * Displays a single Verb model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

        $model = Verb::findOne($id);

        if (\Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();
            $resp = $data['datam'];

            $model->important = $resp;
            $result = 'bad';

            if ($model->save()) {$result = 'good';}

            return $model->examples;
        }
        $model->views = $model->views + 1;
        $model->save();
        /*
        switch ($model->mainword) {
        case true:
        //поиск всех слов группы
        $verbs = Verb::find()->anyTagValues($model->infinitive_sr)->all();

        //добавление главного слова в начало списка
        $verbs = array_merge([$model], $verbs);

        break;
        case false:
        //поиск главных слов
        $mainwords = Verb::find()->where(['infinitive_sr' => json_decode($model->related, true)])->all();

        //поиск всех слов группы
        $verbs = Verb::find()->anyTagValues($model->getTagValues(true))->all();

        //добавление главных слов в начало списка
        $verbs = array_merge($mainwords, $verbs);

        //Удаление искомого слова из списка, чтобы потом вставить его в начало
        foreach ($verbs as $key => $value) {
        if ($value->id == $id) {unset($verbs[$key]);};
        }

        //добавление искомого слова в начало списка
        $verbs = array_merge([$model], $verbs);

        break;
        }
         */

        if ($model->mainword) {
            //поиск всех слов группы
            $verbs1 = Verb::find()->anyTagValues($model->infinitive_sr)->all();
        }

        //поиск главных слов
        $mainwords = Verb::find()->where(['infinitive_sr' => json_decode($model->related, true)])->all();

        //поиск всех слов группы
        $verbs2 = Verb::find()->anyTagValues($model->getTagValues(true))->all();

        //добавление главных слов в начало списка
        $verbs = array_merge($mainwords, $verbs2);

        //добавление слов ко всем словам группы данного главного слова, если оно таковое
        if (isset($verbs1)) {
            $verbs = array_merge($verbs1, $verbs);
        }

        //Удаление искомого слова из списка, чтобы потом вставить его в начало
        foreach ($verbs as $key => $value) {
            if ($value->id == $id) {unset($verbs[$key]);};
        }

        //добавление искомого слова в начало списка
        $verbs = array_merge([$model], $verbs);

        //удаление дубликатов из результирующего массива
        $verbs = array_map("unserialize", array_unique(array_map("serialize", $verbs)));

        //поиск релевантных примеров из разговорника
        $phrases = Phrasebook2::find()->select('serbian, russian')->asarray()->all();
        $relevants = [];
        foreach ($verbs as $verb) {
            $variants = [];
            if (isset($verb->conjunction)) {
                foreach (json_decode($verb->conjunction, true) as $key => $value) {
                    foreach ($value as $key => $value) {
                        if (!empty($value)) {
                            if (is_array($value)) {
                                foreach ($value as $key2 => $value2) {
                                    $variants[] = strtolower($value2);
                                }
                            } else {
                                $variants[] = strtolower($value);
                            }

                        }

                    }
                }
            }

            if (isset($verb->others)) {
                foreach (json_decode($verb->others, true) as $key => $value) {
                    if (!empty($value)) {
                        $variants[] = strtolower($value['word']);
                    }
                }
            }

            foreach (json_decode($verb->others, true) as $key => $value) {
                $variants[] = strtolower($value['word']);
            }

            foreach ($phrases as $key => $value) {
                $data = preg_replace('/[\"\[\]?\{\!\},\:\;]/u', '', $value['serbian']);
                $data = preg_replace('| +|', ' ', $value['serbian']);

                $datar = explode(' ', $data);
                $datar = array_filter($datar);

                if (!empty($datar)) {
                    $datam = array_walk($datar, function (&$n) {
                        $n = mb_strtolower($n);
                    });

                    $ai = array_intersect($datar, $variants);
                    if (!empty($ai)) {
                        $relevants[$verb->id][] = $phrases[$key];
                    }
                }
            }
        }

        //$model-> здесь не декодим
        return $this->render('view', [
            'models' => $verbs,
            'relevants' => $relevants,
        ]);
    }

    /**
     * Creates a new Verb model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Verb();

        if ($model->load(Yii::$app->request->post())) {

            $model->infinitive_sr = json_encode($model->infinitive_sr, JSON_UNESCAPED_UNICODE);
            $model->infinitive_ru = json_encode($model->infinitive_ru, JSON_UNESCAPED_UNICODE);
            $model->infinitive_en = json_encode($model->infinitive_en, JSON_UNESCAPED_UNICODE);
            $model->conjunction = json_encode($model->conjunction, JSON_UNESCAPED_UNICODE);
            $model->others = json_encode($model->others, JSON_UNESCAPED_UNICODE);
            $model->examples = json_encode($model->examples, JSON_UNESCAPED_UNICODE);
            $model->examples_ref = json_encode($model->examples_ref, JSON_UNESCAPED_UNICODE);
            $model->meanings = json_encode($model->meanings, JSON_UNESCAPED_UNICODE);

            if ($model->related) {
                $model->tagValues = $model->related;
                $model->related = json_encode($model->related, JSON_UNESCAPED_UNICODE);
            }

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {

            $allTags = Tag1::getAllVerbs(true, 'sr');
            $model->rating = 3;
            return $this->render('create', [
                'model' => $model,
                'data' => $allTags,
                'infinitives' => $this->getInfinitives(),
            ]);
        }
    }

    /**
     * Updates an existing Verb model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            //this redord's tags
            $model->tagValues = $model->related;
            $model->related = json_encode($model->related, JSON_UNESCAPED_UNICODE);

            $model->infinitive_sr = json_encode($model->infinitive_sr, JSON_UNESCAPED_UNICODE);
            $model->infinitive_ru = json_encode($model->infinitive_ru, JSON_UNESCAPED_UNICODE);
            $model->infinitive_en = json_encode($model->infinitive_en, JSON_UNESCAPED_UNICODE);

            //removing redundant information
            if (isset($_POST['Verb']['conjunction'])) {
                foreach ($_POST['Verb']['conjunction'] as $key => $value) {
                    if (is_array($value)) {
                        $flag = true;
                        if (empty(array_filter($_POST['Verb']['conjunction'][$key]))) {
                            unset($_POST['Verb']['conjunction'][$key]);
                        }
                    } else if (empty(array_filter($value))) {
                        unset($_POST['Verb']['conjunction'][$key]);
                    }
                    if (isset($flag)) {

                        if ($flag) {
                            // echo $key . ' true;';
                            // print_r($value);
                            if (empty(array_filter($value))) {
                                // echo $key;
                                unset($_POST['Verb']['conjunction'][$key]);
                            }
                            $flag = false;
                        }}
                }
            }
            $model->conjunction = isset($_POST['Verb']['conjunction']) ? json_encode($_POST['Verb']['conjunction'], JSON_UNESCAPED_UNICODE) : '';
            $model->others = isset($_POST['Verb']['others']) ? json_encode($_POST['Verb']['others'], JSON_UNESCAPED_UNICODE) : '';
            $model->examples = isset($_POST['Verb']['examples']) ? json_encode($_POST['Verb']['examples'], JSON_UNESCAPED_UNICODE) : '';
            $model->examples_ref = isset($_POST['Verb']['examples_ref']) ? json_encode($_POST['Verb']['examples_ref'], JSON_UNESCAPED_UNICODE) : '';
            $model->meanings = isset($_POST['Verb']['meanings']) ? json_encode($_POST['Verb']['meanings'], JSON_UNESCAPED_UNICODE) : '';

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $model->infinitive_sr = json_decode($model->infinitive_sr, true);
            $model->infinitive_ru = json_decode($model->infinitive_ru, true);
            $model->infinitive_en = json_decode($model->infinitive_en, true);
            $model->conjunction = json_decode($model->conjunction, true);
            $model->others = json_decode($model->others, true);
            $model->examples = json_decode($model->examples, true);
            $model->examples_ref = json_decode($model->examples_ref, true);
            $model->meanings = json_decode($model->meanings, true);
            $model->related = json_decode($model->related, true);

            $allTags = Tag1::getAllVerbs(true, 'sr');
            return $this->render('update', [
                'model' => $model,
                'data' => $allTags,
                'infinitives' => $this->getInfinitives(),
            ]);
        }
    }

    /**
     * Deletes an existing Verb model.
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
     * Finds the Verb model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Verb the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Verb::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSex($id)
    {
        $model = $this->findModel($id);

        if (\Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();
            switch ($data['param']) {
                case 'important':
                    $model->important = $data['paramval'];
                    break;
                case 'needhelp':
                    $model->needhelp = $data['paramval'];
                    break;
                case 'needtranslation':
                    $model->needtranslation = $data['paramval'];
                    break;
                case 'rating':
                    $model->rating = $data['paramval'];
                    break;
                case 'perfect_verb':
                    $model->perfect_verb = $data['paramval'];
                    break;

            }

            if ($model->save()) {
                return $model->needhelp;}
        }

    }

    private function getInfitranses($combine = false)
    {
        $allTags = Verb::getInfitranses();

        if ($combine) {
            $allTags = array_combine($allTags, $allTags);
        }

        return $allTags;
    }

    private function getInfinitives()
    {
        $verbs = Verb::find()->select(['verb.infinitive_sr', 'verb.infinitive_ru', 'verb.infinitive_en'])->all();
        foreach ($verbs as $verb) {

            foreach ($verb as $key => $value) {
                $v = json_decode($value);
                if ($v) {
                    foreach ($v as $value) {
                        $infinitives[$key][] = $value;
                    }
                }
            }
        }
        if (isset($infinitives)) {
            $infinitives_sr = isset($infinitives['infinitive_sr']) ? array_combine($infinitives['infinitive_sr'], $infinitives['infinitive_sr']) : [];
            $infinitives_ru = isset($infinitives['infinitive_ru']) ? array_combine($infinitives['infinitive_ru'], $infinitives['infinitive_ru']) : [];
            $infinitives_en = isset($infinitives['infinitive_en']) ? array_combine($infinitives['infinitive_en'], $infinitives['infinitive_en']) : [];
        } else {
            $infinitives_sr = [];
            $infinitives_ru = [];
            $infinitives_en = [];

        }

        return ['sr' => $infinitives_sr, 'ru' => $infinitives_ru, 'en' => $infinitives_en];

    }

    public function getConjunctions()
    {

    }

    public function actionTest()
    {

        return $this->render('test');
    }

}
