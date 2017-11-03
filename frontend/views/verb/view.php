<?php

use kartik\rating\StarRating;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model frontend\models\Verb */

$nameCounter = 0;
foreach ($models as $model) {
    $nameCounter++;
    switch ($model->reflexive_verb) {
        case 1:
            $reflexive = ' (се)';
            break;
        case 2:
            $reflexive = ' се';
            break;
        default:
            $reflexive = false;
            break;
    }
    $infinitive_ru = (!null == (json_decode($model->infinitive_ru))) ? is_array($model->infinitive_ru) ? implode(', ', $model->infinitive_ru) : implode(' ', json_decode($model->infinitive_ru)) : false;
    $infinitive_sr = (!null == (json_decode($model->infinitive_sr))) ? is_array($model->infinitive_sr) ? implode(', ', $model->infinitive_sr) : implode(' ', json_decode($model->infinitive_sr)) : false;
    $infinitive_en = (!null == (json_decode($model->infinitive_en))) ? is_array($model->infinitive_en) ? implode(', ', $model->infinitive_en) : implode(' ', json_decode($model->infinitive_en)) : false;

    $infinitive_sr = $infinitive_sr . $reflexive;
    // $this->title = Html::a($infinitive_sr, ['view', 'id' => $model->id], ['class' => 'btn btn-default']) . ' :: ' . $infinitive_ru . ' :: ' . $infinitive_en;
    $this->title = $infinitive_sr . ' :: ' . $infinitive_ru . ' :: ' . $infinitive_en;
    if ($nameCounter === 1) {
        $this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Verbs'), 'url' => ['index']];
    }

    // $this->params['breadcrumbs'][] = $this->title;
    $this->params['breadcrumbs'][] = ['label' => $infinitive_sr, 'url' => ['/verb/view?id=' . $model->id]];

    ?>

<div class="verb-view">

<div class='verb-form'>

      <h1><?=Html::decode($this->title)?></h1>
        <?=Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ])?>
	<?php $form = ActiveForm::begin(['id' => 'contact-form']);?>

<?php if ($nameCounter == 1) {
        ?>

<script>

function getModelId(e) {
	id=null;
	while (id == null){
		e = e.parentElement;
		id = e.getAttribute('model_id');
	}
	return id;
}

function oclick(e, paramName) {

id = getModelId(e);

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
	case 'perfect_verb':

		if (typeof perfect_verb == 'undefined') {
				perfect_verb='<?=$model->perfect_verb;?>';
		}
		if (perfect_verb == true) {paramValue=0} else {paramValue=1}
		perfect_verb = !perfect_verb;

		break;

}

	ajaxSend(paramName, paramValue, id);

};

function ajaxSend(paramName, paramValue, id) {

	$.ajax({
		url: '/verb/sex?id=' + id,
		type: 'POST',
		data: {'param': paramName, 'paramval': paramValue},
		success: function(res){
		//  alert(res + '=result');
		},
		error: function(){
			alert('Error!');
		}
	});

}

</script>


    <?=$form->field($model, 'perfect_verb', ['options' => ['class' => 'my-switcher form-group', 'model_id' => $model->id]])->widget(SwitchInput::classname(), [

            'pluginOptions' => [
                //'handleWidth'=>120,
                //'onText'=> Yii::t('frontend', 'perfect_verb'),
                'offText' => '-',
                'onColor' => 'primary',
                'size' => 'mini',
            ],
            'pluginEvents' => [
                "switchChange.bootstrapSwitch" => "function() {
        oclick(this, 'perfect_verb');
    }",
            ],
        ])?>

	<?=$form->field($model, 'important', ['options' => ['class' => 'my-switcher form-group', 'model_id' => $model->id]])->widget(SwitchInput::classname(), [

            'pluginOptions' => [
                //'handleWidth'=>120,
                //'onText'=> Yii::t('frontend', 'Important'),
                'offText' => '-',
                'onColor' => 'danger',
                'size' => 'mini',
            ],
            'pluginEvents' => [
                "switchChange.bootstrapSwitch" => "function() {
		oclick(this, 'important');
	}",
            ],
        ])?>

	<?=$form->field($model, 'needtranslation', ['options' => ['class' => 'my-switcher form-group', 'model_id' => $model->id]])->widget(SwitchInput::classname(), [
            'name' => 'needtranslation',
            'pluginOptions' => [
                //'handleWidth'=>120,
                //'onText'=> Yii::t('frontend', 'Need Translation'),
                'offText' => '-',
                'onColor' => 'danger',
                'size' => 'mini',
            ],
            'pluginEvents' => [
                "switchChange.bootstrapSwitch" => "function() { oclick(this, 'needtranslation'); }",
            ],
        ])?>

	<?=$form->field($model, 'needhelp', ['options' => ['class' => 'my-switcher form-group', 'model_id' => $model->id]])->widget(SwitchInput::classname(), [
            'name' => 'needhelp',
            'pluginOptions' => [
                //'handleWidth'=>120,
                //'onText'=> Yii::t('frontend', 'Need Help'),
                'offText' => '-',
                'onColor' => 'danger',
                'size' => 'mini',
            ],
            'pluginEvents' => [
                "switchChange.bootstrapSwitch" => "function() { oclick(this, 'needhelp'); }",
            ],
        ])?>

	<?=$form->field($model, 'rating', ['options' => ['model_id' => $model->id]])->widget(StarRating::classname(), [
            'name' => 'rating',
            'pluginOptions' => [
                //    'theme' => 'krajee-uni',
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
            'pluginEvents' => [
                "rating.change" => "function(event, value, caption) { ajaxSend('rating', value, getModelId(this)); }",
            ],
        ])?>
<?php }?>



<div style="margin: -10px 0px 10px 10px; clear: both;">
        <?=Html::a(Yii::t('frontend', 'View'), ['view', 'id' => $model->id], ['class' => 'btn btn-default btn-xs'])?>
        <?=Html::a(Yii::t('frontend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-xs'])?>
        <?=Html::a(Yii::t('frontend', 'Delete'), ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger btn-xs',
        'data' => [
            'confirm' => Yii::t('frontend', 'Are you sure you want to delete this item?'),
            'method' => 'post',
        ],
    ])?>
        <?=Html::a(Yii::t('frontend', 'Create Verb'), ['create'], ['class' => 'btn btn-success btn-xs'])?>
</div>

<?php if (!empty($model->conjunction)) {
        ?>
	<?=$this->render('_conjunctions.php', [
            'conjunction' => $model->conjunction,
            'model' => $model,
            'form' => $form,
        ])?>
<?php }?>

<?php if (!empty($model->others)) {
        ?>
	<?=$this->render('_others.php', [
            'others' => $model->others,
            'model' => $model,
            'form' => $form,
        ])?>
<?php }?>

<?php if (!empty($model->examples)) {
        ?>
    <?=$this->render('_examples.php', [
            'examples' => $model->examples,
            'model' => $model,
            'form' => $form,
        ])?>
<?php }?>

<?php if (!empty($model->examples_ref)) {
        ?>
	<?=$this->render('_examples.php', [
            'examples' => $model->examples_ref,
            'model' => $model,
            'form' => $form,
        ])?>
<?php }?>

<?php if (!empty($model->comment)) {?>
<div style="border: 1px solid #BBB; margin:10px 0px;"><strong>Комментарий:<br /></strong><?=$model->comment?></div>
<?php }?>
<?php if (isset($relevants[$model->id])) {
        ?>
<table class="table1">
    <thead><td>Пример</td><td>Перевод</td></thead>
<?php
foreach ($relevants[$model->id] as $value) {
            echo '<tr><td>' . $value['serbian'] . '</td><td>' . $value['russian'] . '</td></tr>';
        }

        ?>
</table>

<?php }?>














<?php if (!empty($model->meanings)) {
        ?>

	<?=$this->render('_meanings.php', [
            'meanings' => $model->meanings,
            'model' => $model,
            'form' => $form,
        ])?>
<?php }?>

	<?php if (in_array(Yii::$app->controller->action->id, ['update', 'create'])) {
        ?>

	<?=$form->field($model, 'mainword')->checkbox()?>

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
                //  'tags' => true,
            ],

        ]);?>

		<div class='form-group'>
			<?=Html::submitButton($model->isNewRecord ? Yii::t('frontend', 'Create') : Yii::t('frontend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])?>
		</div>
	<?php }?>

	<?php ActiveForm::end();?>

</div>
<!-- 	<p>
		<?=Html::a(Yii::t('frontend', 'View'), ['view', 'id' => $model->id], ['class' => 'btn btn-default'])?>
		<?=Html::a(Yii::t('frontend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary'])?>
		<?=Html::a(Yii::t('frontend', 'Delete'), ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => Yii::t('frontend', 'Are you sure you want to delete this item?'),
            'method' => 'post',
        ],
    ])?>
		<?=Html::a(Yii::t('frontend', 'Create Verb'), ['create'], ['class' => 'btn btn-success'])?>
	</p> -->
    <hr>
<?php }?>



