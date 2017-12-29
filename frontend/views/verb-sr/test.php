<?php
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VerbSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'test');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verb-index">
</div>


<?php

$vc = Yii::$app->runAction('verb-sr/sex2', ['glagol' => 'назвати']);
print_r($vc);
exit;
