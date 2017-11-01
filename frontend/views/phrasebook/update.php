<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Phrasebook */

$this->title = Yii::t('frontend', ' ' /*'Update {modelClass}: ', [
    'modelClass' => 'Phrasebook' ]*/

) . $model->topic;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Phrasebooks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->topic, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('frontend', 'Update');
?>
<div class="phrasebook-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
