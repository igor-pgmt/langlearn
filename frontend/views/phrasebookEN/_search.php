<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PhrasebookENSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phrasebookEN-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
]);?>

    <?=$form->field($model, 'id')?>

    <?=$form->field($model, 'topic')?>

    <?=$form->field($model, 'header')?>

    <?=$form->field($model, 'phrase')?>

    <?=$form->field($model, 'translation')?>

    <div class="form-group">
        <?=Html::submitButton(Yii::t('frontend', 'Search'), ['class' => 'btn btn-primary'])?>
        <?=Html::resetButton(Yii::t('frontend', 'Reset'), ['class' => 'btn btn-default'])?>
    </div>

    <?php ActiveForm::end();?>

</div>
