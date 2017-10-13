<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Verb;
use frontend\models\Testtable;
use frontend\models\VerbSearch;
use frontend\models\Tag1;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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

	if(\Yii::$app->request->isAjax){
						$data = Yii::$app->request->post();
						$resp = $data['datam'];

		$model->important = $resp; $result='bad';
		if ($model->save()) {$result = 'good';}
		return $model->examples;
	}




		if ($model->load(Yii::$app->request->post()) && $model->save())
		{
			$model = Verb::findOne($id);
		}

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
			$model->conjunction = json_encode($_POST['Verb']['conjunction'], JSON_UNESCAPED_UNICODE);
			$model->others = json_encode($_POST['Verb']['others'], JSON_UNESCAPED_UNICODE);
			$model->examples = json_encode($_POST['Verb']['examples'], JSON_UNESCAPED_UNICODE);
			$model->meanings = json_encode($_POST['Verb']['meanings'], JSON_UNESCAPED_UNICODE);

			 if ($model->related) {
				$model->tagValues = $model->related;
				$model->related = json_encode($model->related, JSON_UNESCAPED_UNICODE);
			 }

			$model->save();
			return $this->redirect(['view', 'id' => $model->id]);
		} else {

			$allTags = Tag1::getAllVerbs(true,false) ;
			$model->rating = 3;
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
			$model->related = json_encode($model->related, JSON_UNESCAPED_UNICODE);

			$model->conjunction = isset($_POST['Verb']['conjunction']) ? json_encode($_POST['Verb']['conjunction'], JSON_UNESCAPED_UNICODE) : '' ;
			$model->others = isset($_POST['Verb']['others']) ? json_encode($_POST['Verb']['others'], JSON_UNESCAPED_UNICODE) : '' ;
			$model->examples = isset($_POST['Verb']['examples']) ? json_encode($_POST['Verb']['examples'], JSON_UNESCAPED_UNICODE) : '' ;
			$model->meanings = isset($_POST['Verb']['meanings']) ? json_encode($_POST['Verb']['meanings'], JSON_UNESCAPED_UNICODE) : '' ;

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

	public function actionTestingCreate()
	{
		// $model = $this->findModel(5);
$model = new Testtable();
		if ($model->load(Yii::$app->request->post())) {

			$model->myfield = isset($_POST['Verb']['myfield']) ? json_encode($_POST['Verb']['myfield']) : '' ;

			$model->save();
			//return $this->redirect(['testing']);
		} else {

		return $this->render('testing',
			[
				'model' => $model,
			]);
	}
}



public function actionSex($id)
{
	$model = $this->findModel($id);

	if(\Yii::$app->request->isAjax){
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

		}

		// if (isset($data['important'])) $model->important = $data['important'];
		// if (isset($data['needhelp'])) $model->needhelp = $data['needhelp'];
		// if (isset($data['rating'])) $model->rating = $data['rating'];

		 $result='bad';
		if ($model->save()) {$result = 'good';}
		return $model->needhelp;
	}


}








	public function actionTestingView()
	{
		// $model = $this->findModel(5);
$model = new Testtable();
		if ($model->load(Yii::$app->request->post())) {

			$model->myfield = isset($_POST['Verb']['myfield']) ? json_encode($_POST['Verb']['myfield']) : '' ;

			$model->save();
			return $this->redirect(['testing']);
		} else {

print_r($_POST);exit;

		$model->myfield = json_decode($model->myfield, true);

		return $this->render('testing',
			[
				'model' => $model,
			]);
	}
}

}
