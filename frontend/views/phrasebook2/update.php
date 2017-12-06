<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Phrasebook2 */

$this->title = Yii::t('frontend', 'Update {modelClass}: ', [
    'modelClass' => 'Phrasebook2',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Phrasebook'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('frontend', 'Update');
?>
<div class="phrasebook2-update">

    <h1><?=Html::encode($this->title)?></h1>

    <?=$this->render('_form', [
    'model' => $model,
    'phrases' => $phrases,
    'header' => $header,
])?>

</div>
