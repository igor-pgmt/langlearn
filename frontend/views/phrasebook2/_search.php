<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Phrasebook2Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phrasebook2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'topic') ?>

    <?= $form->field($model, 'header') ?>

    <?= $form->field($model, 'phrase') ?>

    <?= $form->field($model, 'translation') ?>

    <?php // echo $form->field($model, 'language') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('frontend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('frontend', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
