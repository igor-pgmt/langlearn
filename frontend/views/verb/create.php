<?php

use kartik\rating\StarRating;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use unclead\multipleinput\MultipleInput;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Verb */

$this->title = Yii::t('frontend', 'Create Verb');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Verbs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verb-create">

    <h1><?=Html::encode($this->title)?></h1>

<div class='verb-form'>

	<?php $form = ActiveForm::begin(['id' => 'contact-form']);?>

	<?=$form->field($model, 'infinitive_sr')->widget(Select2::classname(), [
    'data' => $infinitives['sr'],
    'options' => [
        'placeholder' => 'Add ...',
        'multiple' => true,

    ],
    'pluginOptions' => [
        'allowClear' => true,
        'tags' => true,

    ],

]);?>

    <?=$form->field($model, 'infinitive_ru')->widget(Select2::classname(), [
    'data' => $infinitives['ru'],
    'options' => [
        'placeholder' => 'Add ...',
        'multiple' => true,

    ],
    'pluginOptions' => [
        'allowClear' => true,
        'tags' => true,

    ],

]);?>

	<?=$form->field($model, 'infinitive_en')->widget(Select2::classname(), [
    'data' => $infinitives['en'],

    'options' => [
        'placeholder' => 'Add ...',
        'multiple' => true,

    ],
    'pluginOptions' => [
        'allowClear' => true,
        'tags' => true,

    ],

]);?>


    <?=$form->field($model, 'perfect_verb', ['options' => ['class' => 'my-switcher form-group']])->widget(SwitchInput::classname(), [
    'name' => 'perfect_verb',
    'pluginOptions' => [
        // 'handleWidth' => 120,
        // 'onText' => Yii::t('frontend', 'p'),
        'offText' => '-',
        'onColor' => 'primary',
        'size' => 'mini',

    ],
    'pluginEvents' => [
        "switchChange.bootstrapSwitch" => "function() { oclick('important'); }",
    ],
])?>

	<?=$form->field($model, 'important', ['options' => ['class' => 'my-switcher form-group']])->widget(SwitchInput::classname(), [
    'name' => 'important',
    'pluginOptions' => [
        //'handleWidth'=>120,
        //'onText'=> Yii::t('frontend', 'Important'),
        'offText' => '-',
        'onColor' => 'danger',
        'size' => 'mini',
    ],
])?>

	<?=$form->field($model, 'needtranslation', ['options' => ['class' => 'my-switcher form-group']])->widget(SwitchInput::classname(), [
    'name' => 'needtranslation',
    'pluginOptions' => [
        //'handleWidth'=>120,
        //'onText'=> Yii::t('frontend', 'Need Translation'),
        'offText' => '-',
        'onColor' => 'danger',
        'size' => 'mini',
    ],
])?>

	<?=$form->field($model, 'needhelp', ['options' => ['class' => 'my-switcher form-group']])->widget(SwitchInput::classname(), [
    'name' => 'needhelp',
    'pluginOptions' => [
        //'handleWidth'=>120,
        //'onText'=> Yii::t('frontend', 'Need Help'),
        'offText' => '-',
        'onColor' => 'danger',
        'size' => 'mini',
    ],
])?>

	<?=$form->field($model, 'rating')->widget(StarRating::classname(), [
    'name' => 'needhelp',
    'pluginOptions' => [
        'containerClass' => 'my-rating',
        'theme' => 'krajee-uni',
        'filledStar' => '<i class="glyphicon glyphicon-menu-right" style="color: blue;"></i>',
        'emptyStar' => '<i class="glyphicon glyphicon-menu-right"></i>',
        'step' => 1,
        'size' => 's',
        'showClear' => false,
        'starCaptions' => new JsExpression("function(val){return val ;}"),
        'starCaptionClasses' => [
            1 => 'text-primary',
            2 => 'text-primary',
            3 => 'text-primary',
            4 => 'text-primary',
            5 => 'text-primary',
        ],
    ],
])?>

    <?=$form->field($model, 'reflexive_verb', ['options' => ['class' => 'my-switcher form-group']])->widget(SwitchInput::classname(), [
    'type' => SwitchInput::RADIO,
    'name' => 'reflexive_verb',
    'items' => [
        ['label' => 'NonR', 'value' => 0],
        ['label' => 'Ref', 'value' => 1],
        ['label' => 'rOnly', 'value' => 2],
    ],
    'value' => 0,
    'pluginOptions' => [
// 'handleWidth' => 120,

        'onColor' => 'danger',
        'offColor' => 'default',
        'size' => 'mini',

    ],
// 'pluginEvents' => [
    //     "switchChange.bootstrapSwitch" => "function() { oclick('important'); }",
    // ],
])?>

	<div class='form-group top-sbm'>
		<?=Html::submitButton(Yii::t('frontend', 'Create'), ['class' => 'btn btn-success'])?>
	</div>

	<?=$this->render('_conjunctions.php', [
    'conjunction' => $model->conjunction,
    'model' => $model,
    'form' => $form,
])?>

	<?=$form->field($model, 'others')->widget(MultipleInput::className(), [
    'max' => 100,
    'min' => 1, // should be at least 2 rows
    'allowEmptyList' => true,
    'enableGuessTitle' => true,
    'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    'columns' => [
        [
            'name' => 'kind',
            'type' => \kartik\select2\Select2::className(),
            'options' => [
                'data' => [
                    "Глаголска именица" => "Глаголска именица",
                    "Глаголски прилог прошли" => "Глаголски прилог прошли",
                    "Глаголски прилог садашњи" => "Глаголски прилог садашњи",
                    "Радни глаголски прилог" => "Радни глаголски прилог",
                    "Трпни глаголски придев" => "Трпни глаголски придев",
                    "Именица" => "Именица",
                    "Придев" => "Придев",
                ],
                'pluginOptions' => [
                    'tags' => true,
                ],
                'options' => [
                    'placeholder' => 'Add ...',
                ],
            ],
            'title' => 'Вид',
        ],
        [
            'name' => 'word',
            'type' => 'textarea',
            'title' => 'Слово',
        ],
        [
            'name' => 'translation',
            'type' => 'textarea',
            'title' => 'Перевод',
        ],
    ],
])
->label(false);
?>

    <?=$form->field($model, 'examples')->widget(MultipleInput::className(), [
    'max' => 100,
    'min' => 1, // should be at least 2 rows
    'allowEmptyList' => true,
    'enableGuessTitle' => true,
    'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    'columns' => [
        [
            'name' => 'example',
            'type' => 'textarea',
            'title' => 'Пример',
        ],
        [
            'name' => 'translation',
            'type' => 'textarea',
            'title' => 'Перевод',
        ],
    ],
])
->label(false);
?>

	<?=$form->field($model, 'examples_ref')->widget(MultipleInput::className(), [
    'max' => 100,
    'min' => 1, // should be at least 2 rows
    'allowEmptyList' => true,
    'enableGuessTitle' => true,
    'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    'columns' => [
        [
            'name' => 'example',
            'type' => 'textarea',
            'title' => 'Возвратный Пример',
        ],
        [
            'name' => 'translation',
            'type' => 'textarea',
            'title' => 'Перевод',
        ],
    ],
])
->label(false);
?>

     <?=$form->field($model, 'comment')->textarea()?>

<!--        <?=$this->render('_meanings.php', [
    'meanings' => $model->meanings,
    'model' => $model,
    'form' => $form,
])?>-->

	<?=
$form->field($model, 'meanings')->widget(MultipleInput::className(), [
    'max' => 100,
    'min' => 1, // should be at least 2 rows
    'allowEmptyList' => true,
    'enableGuessTitle' => true,
    'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    'columns' => [
        [
            'name' => 'meaning',
            'type' => 'textarea',
            'title' => 'Значение',
        ],
        [
            'name' => 'translation',
            'type' => 'textarea',
            'title' => 'Перевод',
        ],
    ],
])
->label(false);
?>


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
			<?=Html::submitButton(Yii::t('frontend', 'Create'), ['class' => 'btn btn-success'])?>
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


</div>
</div>
