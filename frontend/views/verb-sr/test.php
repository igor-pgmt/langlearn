<?php
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VerbSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use frontend\models\VerbConjunctionSR;

$this->title = Yii::t('frontend', 'test');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verb-index">
</div>


<?php
$vc = new VerbConjunctionSR;

$vc->rgp = "asd";
$vc->present = "zxc";

$s = $vc->save();
$vd = new VerbConjunctionSR;

$vd->fill($s);

exit;
