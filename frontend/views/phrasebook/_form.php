<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use unclead\multipleinput\MultipleInput;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model frontend\models\Phrasebook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phrasebook-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'topic')->textinput() ?>
<?php

if ($model->phrases) {
	# code...


$result = $model->phrases;




foreach ($result as $value) {
	$headers[]= $value['header'];
}
}


if (isset($headers)) {
	# code...

if (is_array($headers)) {
	$headers = array_combine($headers, $headers);
} else {
$headers = [$headers => $headers];
}
} else {$headers = [];}

?>
	<?= $form->field($model, 'phrases')->widget(MultipleInput::className(), [
		'max'               => 100,
		'min'               => 1, // should be at least 2 rows
		'allowEmptyList'    => false,
		'enableGuessTitle'  => true,
		'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
		'columns' => [
			[
				'name'  => 'header',
				'type'  => \kartik\select2\Select2::className(),
				'options' => [
					'data' => $headers,
					'pluginOptions' => [
						'tags' => true,
					],
					'options' => [
						'placeholder' => 'Add ...',
					],
				],
				'title' => 'Header',
			],
			[
				'name'  => 'phrase',
				'type'  => 'textarea',
				'title' => 'Phrase',

			],
			[
				'name'  => 'translation',
				'type'  => 'textarea',
				'title' => 'Translation',

			],
		],
	])
	->label(false);
	?>

		<?= $form->field($model, 'language')->widget(Select2::classname(), [
		'data' => ['sr'=>'sr', 'en'=>'en'],
		'id' => 'language',
		'pluginOptions' => [
			'allowClear' => false,
			'width' => '100px',
		],
		'value' => 'sr',

	]); ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? Yii::t('frontend', 'Create') : Yii::t('frontend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
