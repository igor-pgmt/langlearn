<?php

use frontend\models\Verb;

$id= 3 ;
$model = Verb::findOne($id);
switch ($model->mainword) {
	case true:
		//$verbs = Verb::find()->anyTagValues($model->infinitive)->asArray()->all();
		$verbs = Verb::find()->anyTagValues($model->infinitive)->select('verb.id')->column();
		print_r($verbs);
		break;
	case false:
		//$firstTags = $model->getTagValues(true);
		//$verbs = Verb::find()->anyTagValues($model->getTagValues(true))->asArray()->all();
		$verbs = Verb::find()->anyTagValues($model->getTagValues(true))->select('verb.id')->column();
		print_r($verbs);
		break;

}

