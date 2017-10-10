<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Verb;
use frontend\models\VerbSearch;
use frontend\models\Tag1;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * VerbController implements the CRUD actions for Verb model.
 */
class VerbController extends Controller
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

	switch ($model->mainword) {
		case true:
			//поиск всех слов группы
			$verbs = Verb::find()->anyTagValues($model->infinitive)->all();

			//добавление главного слова в начало списка
			$verbs = array_merge([$model], $verbs);
			break;
		case false:
			//поиск главных слов
			$mainwords = Verb::find()->where(['infinitive' => json_decode($model->related)])->all();

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

		return $this->render('view', [
			'models' => $verbs,
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

		if ($model->load(Yii::$app->request->post()) ) {
			$model->conjunction = json_encode($_POST['Verb']['conjunction']);
			$model->others = json_encode($_POST['Verb']['others']);
			$model->examples = json_encode($_POST['Verb']['examples']);
			$model->meanings = json_encode($_POST['Verb']['meanings']);

			 if ($model->related) {print_r($model->related);
				$model->tagValues = $model->related;
				$model->related = json_encode($model->related);
			 }

			$model->save();
			return $this->redirect(['view', 'id' => $model->id]);
		} else {

			$allTags = Tag1::getAllVerbs(true,false) ;
			return $this->render('create', [
				'model' => $model,
				'data' => $allTags,
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
			$model->related = json_encode($model->related);

			$model->conjunction = isset($_POST['Verb']['conjunction']) ? json_encode($_POST['Verb']['conjunction']) : '' ;
			$model->others = isset($_POST['Verb']['others']) ? json_encode($_POST['Verb']['others']) : '' ;
			$model->examples = isset($_POST['Verb']['examples']) ? json_encode($_POST['Verb']['examples']) : '' ;
			$model->meanings = isset($_POST['Verb']['meanings']) ? json_encode($_POST['Verb']['meanings']) : '' ;

			$model->save();
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			$model->conjunction = json_decode($model->conjunction, true);
			$model->others = json_decode($model->others, true);
			$model->examples = json_decode($model->examples, true);
			$model->meanings = json_decode($model->meanings, true);
			$model->related = json_decode($model->related, true);

			$allTags = Tag1::getAllVerbs(true,false);
			return $this->render('update', [
				'model' => $model,
				'data' => $allTags,
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

	public function actionTesting()
	{
		return $this->render('testing');
	}

}
