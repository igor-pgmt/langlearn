<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\widgets\Test\TestWidget;

/* @var $this yii\web\View */
/* @var $model frontend\models\Testtable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testtable-form">

    <?php $form = ActiveForm::begin(); ?>



	<?= $form->field($model, 'myfield')->widget(TestWidget::classname(), [
		'pluginOptions' => [
			'tableName' => 'myfield',
			'columns' => 2,
			'columnHeaders' => ['col1', 'col2' ],
			'rows' => 3,
			'rowHeaders' => ['row1', 'row2', 'row3'],
		]
	]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('frontend', 'Create') : Yii::t('frontend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
