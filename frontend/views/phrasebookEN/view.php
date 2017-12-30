<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PhrasebookEN */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Phrasebook'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phrasebookEN-view">

    <h1><?=Html::encode($this->title)?></h1>

    <p>
        <?=Html::a(Yii::t('frontend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary'])?>
        <?=Html::a(Yii::t('frontend', 'Delete'), ['delete', 'id' => $model->id], [
    'class' => 'btn btn-danger',
    'data' => [
        'confirm' => Yii::t('frontend', 'Are you sure you want to delete this item?'),
        'method' => 'post',
    ],
])?>
        <?=Html::a(Yii::t('frontend', 'Create Phrase'), ['create'], ['class' => 'btn btn-success'])?>

    </p>

    <?=DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'topic:ntext',
        'header:ntext',
        'russian:ntext',
        'serbian:ntext',
        'english:ntext',
        'comment:ntext',
        'important:ntext',
        'needhelp:ntext',
        'word:ntext',
    ],
])?>

</div>
