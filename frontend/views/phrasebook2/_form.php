<?php

use kartik\depdrop\DepDrop;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Phrasebook2 */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="phrasebook2-form">

    <?php $form = ActiveForm::begin();?>

    <?=$form->field($model, 'important')->widget(SwitchInput::classname(), [
    'name' => 'important',
    'pluginOptions' => [
        //'handleWidth'=>120,
        //'onText'=> Yii::t('frontend', 'Important'),
        'offText' => '-',
        'onColor' => 'danger',
        'size' => 'mini',
    ],
])?>

    <?=$form->field($model, 'needhelp')->widget(SwitchInput::classname(), [
    'name' => 'needhelp',
    'pluginOptions' => [
        //'handleWidth'=>120,
        //'onText'=> Yii::t('frontend', 'Important'),
        'offText' => '-',
        'onColor' => 'danger',
        'size' => 'mini',
    ],
])?>

    <?=$form->field($model, 'topic')->widget(Select2::classname(['options' => ['id' => 'cat-id'], 'id' => 'cat-id']), [
    'data' => $phrases['topic'],
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        // 'width' => '550px',
    ],
    'options' => [
        'placeholder' => 'Add ...',
        'id' => 'cat-id',
    ],
]);?>

    <?=$form->field($model, 'header')->widget(DepDrop::classname(), [
    'type' => DepDrop::TYPE_SELECT2,
    'data' => $header,
    'select2Options' => [
        'pluginOptions' => [
            'allowClear' => true,
            'tags' => true,
            // 'width' => '550px',

        ]],
    'options' => ['id' => 'subcat-id'],
    'pluginOptions' => [
        'initialize' => true,
        'depends' => ['cat-id'],
        'placeholder' => 'Select...',
        'url' => Url::to(['/phrasebook2/subcat']),
    ],
]);?>

    <?=$form->field($model, 'serbian')->widget(Select2::classname(), [
    'data' => $phrases['sr'],
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        // 'width' => '550px',
    ],
    'options' => [
        'placeholder' => 'Add ...',
    ],
]);?>

    <?=$form->field($model, 'russian')->widget(Select2::classname(), [
    'data' => $phrases['ru'],
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        // 'width' => '550px',
    ],
    'options' => [
        'placeholder' => 'Add ...',
    ],
]);?>

    <?=$form->field($model, 'english')->widget(Select2::classname(), [
    'data' => $phrases['en'],
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        // 'width' => '550px',
    ],
    'options' => [
        'placeholder' => 'Add ...',
    ],
]);?>

    <?=$form->field($model, 'comment')->textarea(['rows' => '3'])?>

    <?=$form->field($model, 'word')->widget(SwitchInput::classname(['value' => false]), [
    'name' => 'word',
    'pluginOptions' => [
        //'handleWidth'=>120,
        //'onText'=> Yii::t('frontend', 'Important'),
        'offText' => '-',
        'onColor' => 'default',
        'size' => 'mini',
    ],
])?>

    <div class="form-group">
        <?=Html::submitButton($model->isNewRecord ? Yii::t('frontend', 'Save') : Yii::t('frontend', 'Save'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])?>
        <?php
if ($model->isNewRecord) {
    echo Html::submitButton(Yii::t('frontend', 'Save and Create'), ['class' => 'btn btn-success', 'name' => 'new']);
}
?>
    </div>

    <?php ActiveForm::end();?>

</div>
