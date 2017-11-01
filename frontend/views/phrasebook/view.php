<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use kartik\select2\Select2;
use yii\data\ArrayDataProvider;

/* @var $this yii\web\View */
/* @var $model frontend\models\Phrasebook */

$this->title = $model->topic;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Phrasebooks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phrasebook-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a(Yii::t('frontend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a(Yii::t('frontend', 'Delete'), ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => Yii::t('frontend', 'Are you sure you want to delete this item?'),
				'method' => 'post',
			],
		]) ?>
		<?= Html::a(Yii::t('frontend', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
	</p>
<!--
<table id="table1">
	<thead>
		<tr>
			<th>Category</th>
			<th>Phrase</th>
			<th>Translation</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($model->phrases as $row) { ?>
			<tr>
				<?php foreach ($row as $key => $value) { ?>
					<td><?= $value ?></td>
				<?php } ?>
			</tr>
		<?php } ?>
	</tbody>
</table> -->

<!--
	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
		//	'id',
			'topic:ntext',
			//'phrases:ntext',
			'language:ntext',
		],
	]) ?>
 -->
</div>


	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
 //           ['class' => 'kartik\grid\SerialColumn'],

        	'header',
            'phrase',
            'translation',

        ],
    ]); ?>

<?= Html::a(Yii::t('frontend', 'Reset'), ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>