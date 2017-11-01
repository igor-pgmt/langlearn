
<script>
function oclick(paramName) {

switch(paramName) {
    case 'important':

		if (typeof important == 'undefined') {
				important='<?=$model->important;?>';
		}
		if (important == true) {paramValue=0} else {paramValue=1}
		important = !important;

        break;
    case 'needhelp':

		if (typeof needhelp == 'undefined') {
				needhelp='<?=$model->needhelp;?>';
		}
		if (needhelp == true) {paramValue=0} else {paramValue=1}
		needhelp = !needhelp;

        break;
    case 'needtranslation':

		if (typeof needtranslation == 'undefined') {
				needtranslation='<?=$model->needtranslation;?>';
		}
		if (needtranslation == true) {paramValue=0} else {paramValue=1}
		needtranslation = !needtranslation;

        break;

}

	ajaxSend(paramName, paramValue);

};


function oclick2(paramName, paramValue) {
alert(paramName);
alert(paramValue);


}

function ajaxSend(paramName, paramValue) {

	$.ajax({
		url: '/verb/sex?id=' + '<?=$model->id;?>',
		type: 'POST',
		data: {'param': paramName, 'paramval': paramValue},
		success: function(res){
		//	alert(res + '=result');
		},
		error: function(){
			alert('Error!');
		}
	});


}


</script>


<?php

use kartik\rating\StarRating;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

?>

<div class='verb-form'>

	<?php $form = ActiveForm::begin(['id' => 'contact-form']);?>

	<?=$form->field($model, 'infinitive')->textInput()?>

	<?=$form->field($model, 'infitranslation')->textInput()?>

	<?=$form->field($model, 'perfect_verb')->widget(SwitchInput::classname(), [
    'name' => 'perfect_verb',
    'pluginOptions' => [
        'handleWidth' => 120,
        'onText' => Yii::t('frontend', 'perfect_verb'),
        'offText' => '-',
        'onColor' => 'default',
    ],
    'pluginEvents' => [
        "switchChange.bootstrapSwitch" => "function() { oclick('important'); }",
    ],
])?>
	<?=$form->field($model, 'important')->widget(SwitchInput::classname(), [
    'name' => 'important',
    'pluginOptions' => [
        'handleWidth' => 120,
        'onText' => Yii::t('frontend', 'Important'),
        'offText' => '-',
        'onColor' => 'danger',
    ],
    'pluginEvents' => [
        "switchChange.bootstrapSwitch" => "function() { oclick('important'); }",
    ],
])?>

	<?=$form->field($model, 'needtranslation')->widget(SwitchInput::classname(), [
    'name' => 'needtranslation',
    'pluginOptions' => [
        'handleWidth' => 120,
        'onText' => Yii::t('frontend', 'Need Translation'),
        'offText' => '-',
        'onColor' => 'danger',
    ],
    'pluginEvents' => [
        "switchChange.bootstrapSwitch" => "function() { oclick('needtranslation'); }",
    ],
])?>

	<?=$form->field($model, 'needhelp')->widget(SwitchInput::classname(), [
    'name' => 'needhelp',
    'pluginOptions' => [
        'handleWidth' => 120,
        'onText' => Yii::t('frontend', 'Need Help'),
        'offText' => '-',
        'onColor' => 'danger',
    ],
    'pluginEvents' => [
        "switchChange.bootstrapSwitch" => "function() { oclick('needhelp'); }",
    ],
])?>

	<?=$form->field($model, 'rating')->widget(StarRating::classname(), [
    'name' => 'needhelp',
    'pluginOptions' => [
        'theme' => 'krajee-uni',
        'filledStar' => '<i class="glyphicon glyphicon-menu-right" style="color: blue;"></i>',
        'emptyStar' => '<i class="glyphicon glyphicon-menu-right"></i>',
        'step' => 1,
        'size' => 'xs',
        'showClear' => false,
        //'showCaption' => false,
        'defaultCaption' => '{rating}',
        'starCaptions' => new JsExpression("function(val){return val ;}"),
        'starCaptionClasses' => [
            1 => 'text-primary',
            2 => 'text-primary',
            3 => 'text-primary',
            4 => 'text-primary',
            5 => 'text-primary',
        ],
    ],
    'pluginEvents' => [
        "rating.change" => "function(event, value, caption) { ajaxSend('rating', value); }",
    ],
])?>

		<div class='form-group'>
			<?=Html::submitButton($model->isNewRecord ? Yii::t('frontend', 'Create') : Yii::t('frontend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])?>
		</div>



	<?=$this->render('_conjunctions.php', [
    'conjunction' => $model->conjunction,
    'model' => $model,
    'form' => $form,
])?>

	<?=$this->render('_others.php', [
    'others' => $model->others,
    'model' => $model,
    'form' => $form,
])?>

	<?=$this->render('_examples.php', [
    'examples' => $model->examples,
    'model' => $model,
    'form' => $form,
])?>

<?=$form->field($model, 'comment')->textarea()?>

	<?=$this->render('_meanings.php', [
    'meanings' => $model->meanings,
    'model' => $model,
    'form' => $form,
])?>


	<?php if (in_array(Yii::$app->controller->action->id, ['update', 'create'])) {
    ?>

	<?=$form->field($model, 'mainword')->checkbox()?>


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


	<?=$form->field($model, 'related')->widget(Select2::classname(), [
        'data' => $data,
        'id' => 'tag1',
        //'value' => ['red', 'green'],
        'options' => [
            'placeholder' => 'Add ...',
            'multiple' => true,

        ],
        'pluginOptions' => [
            'allowClear' => true,
            //    'tags' => true,

        ],

    ]);?>

		<div class='form-group'>
			<?=Html::submitButton($model->isNewRecord ? Yii::t('frontend', 'Create') : Yii::t('frontend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])?>
		</div>
	<?php }?>

	<?php ActiveForm::end();?>

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