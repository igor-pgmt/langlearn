<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

?>

<div class='verb-form'>

	<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

	<?= $form->field($model, 'infinitive')->textInput() ?>

	<?= $this->render('_conjunctions.php', [
		'conjunction' => $model->conjunction,
		'model' => $model,
		'form'=>$form
		]) ?>

	<?= $this->render('_others.php', [
		'others'=>$model->others,
		'model'=>$model,
		'form'=>$form
		]) ?>

	<?= $this->render('_examples.php', [
		'examples'=>$model->examples,
		'model'=>$model,
		'form'=>$form
		]) ?>

	<?= $this->render('_meanings.php', [
		'meanings'=>$model->meanings,
		'model'=>$model,
		'form'=>$form
		]) ?>


	<?php if (in_array(Yii::$app->controller->action->id, ['update', 'create'])) { ?>

	<?= $form->field($model, 'mainword')->checkbox() ?>


<?php
$js = <<<JS
document.getElementById('verb-mainword').onchange = function() {
	input = document.getElementsByClassName('select2-search__field')[0];
    input.disabled = this.checked;
    if (this.checked == true) {input.val('');}; //bug
};
JS;
$this->registerJs($js);
?>


	<?= $form->field($model, 'related')->widget(Select2::classname(), [
		'data' => $data,
		'id' => 'tag1',
		//'value' => ['red', 'green'],
		'options' => [
			'placeholder' => 'Add ...',
			'multiple' => true,

		],
		'pluginOptions' => [
			'allowClear' => true,
		//	'tags' => true,

		],

	]); ?>

		<div class='form-group'>
			<?= Html::submitButton($model->isNewRecord ? Yii::t('frontend', 'Create') : Yii::t('frontend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>
	<?php } ?>

	<?php ActiveForm::end(); ?>

<script>

function addRow(typeOfInsert) {

	if (typeOfInsert == 'others') {
		if (typeof window.othersCounter !== 'undefined') { window.othersCounter = window.othersCounter + 1;} else { window.othersCounter = 2;};
		window.i = window.othersCounter;
	} else if (typeOfInsert == 'examples') {
		if (typeof window.examplesCounter !== 'undefined') { window.examplesCounter = window.examplesCounter + 1;} else { window.examplesCounter = 2;};
		window.i = window.examplesCounter;
	} else if (typeOfInsert == 'meanings') {
		if (typeof window.meaningsCounter !== 'undefined') { window.meaningsCounter = window.meaningsCounter + 1;} else { window.meaningsCounter = 2;};
		window.i = window.meaningsCounter;
	};

	var table = document.getElementById(typeOfInsert).getElementsByTagName('tbody')[0];
	var newRow   = table.insertRow(table.rows.length);
	newRow.id = typeOfInsert+'-row' + window.i;
	var div1 = document.createElement('div');
	var div2 = document.createElement('div');
	div1.className = 'field-verb-'+typeOfInsert+'-'+ i +'-native has-success';
	div2.className = 'field-verb-'+typeOfInsert+'-'+ i +'-translated has-success';
	var input1 = document.createElement('input');
	var input2 = document.createElement('input');
	input1.className = 'col-xs-8 form-control';
	input2.className = 'col-xs-8 form-control';
	input1.name = 'Verb['+typeOfInsert+']['+ i +'][native]';
	input2.name = 'Verb['+typeOfInsert+']['+ i +'][translated]';
	input1.id = 'verb-'+typeOfInsert+'-'+ i +'-native';
	input2.id = 'verb-'+typeOfInsert+'-'+ i +'-translated';
	input1.style.padding = '1px 1px 1px 1px';
	input2.style.padding = '1px 1px 1px 1px';
	input1.type = 'text;';
	input2.type = 'text;';

	var newCell0  = newRow.insertCell(0);
	var newCell1  = newRow.insertCell(1);
	newCell0.appendChild(div1);
	newCell1.appendChild(div2);
	div1.appendChild(input1);
	div2.appendChild(input2);

}

function delRow(typeOfInsert) {

	if (typeOfInsert == 'others') {x = window.othersCounter} else if (typeOfInsert == 'examples') {x = window.examplesCounter} else if (typeOfInsert == 'meanings') {x = window.meaningsCounter}

	if (x > 0) {
		if (typeOfInsert == 'others') {
			if (typeof window.othersCounter !== 'undefined' && window.othersCounter>0 ) { window.othersCounter = window.othersCounter - 1;}
		} else if (typeOfInsert == 'examples') {
			if (typeof window.examplesCounter !== 'undefined' && window.examplesCounter>0 ) { window.examplesCounter = window.examplesCounter - 1;}
		} else if (typeOfInsert == 'meanings') {
			if (typeof window.meaningsCounter !== 'undefined' && window.meaningsCounter>0 ) { window.meaningsCounter = window.meaningsCounter - 1;}
		}

		var child = document.getElementById(typeOfInsert).getElementsByTagName('tbody')[0].getElementsByTagName('tr')[(x-1)];
		child.parentNode.removeChild(child);
	}
}

</script>
