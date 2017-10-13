<?php
use frontend\widgets\Test\TestWidget;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

	<?= $form->field($model, 'myfield')->widget(TestWidget::classname(), [
		'pluginOptions' => [
			'tableName' => 'myfield',
			'columns' => 2,
			'columnHeaders' => ['col1', 'col2' ],
			'rows' => 3,
			'rowHeaders' => ['row1', 'row2', 'row3'],
		]
	]) ?>

<?php ActiveForm::end(); ?>