<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Verb */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Verbs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="verb-view">

    <h1><?= Html::encode($model->infinitive) ?></h1>

    <p>
        <?= Html::a(Yii::t('frontend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('frontend', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('frontend', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a(Yii::t('frontend', 'Create Verb'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?= $this->render('_form.php', [
    'model'=>$model,

    ]) ?>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'conjunction:ntext',
            'others:ntext',
            'meanings:ntext',
            'examples:ntext',
            'related',
            'rating',
        ],
    ]) ?>

</div>
