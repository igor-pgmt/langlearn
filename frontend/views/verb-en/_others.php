<?php

use yii\helpers\Html;

?>

<table class="others">
	<thead>
		<tr>
			<td>Вид</td>
			<td>Слово</td>
			<td>Перевод</td>
		</tr>
	</thead>
	<tbody>
	<?php if (Yii::$app->controller->action->id == 'update') {
    ?>
		<?php
if ($others) {
        foreach ($others as $key => $value) {
            echo '<tr>';
            foreach ($value as $key2 => $value2) {
                $str = 'others[' . $key . '][' . $key2 . ']';
                echo '<td>' . $form->field($model, $str)->textInput(['class' => 'col-xs-8 form-control', 'style' => 'padding: 1px;'])->label(false) . '</td>';
            }
            echo '</tr>';
        }
    }
    ?>
	<tfoot>
		<td>
			<?=Html::button('Add a part of Speech', ['id' => 'addOther', 'class' => 'btn btn-primary', 'onclick' => 'addRow("others");']);?>
		</td>
		<td>
			<?=Html::button('Del a part of Speech', ['id' => 'delOther', 'class' => 'btn btn-danger', 'onclick' => 'delRow("others");']);?>
		</td>
	</tfoot>

	<script>
	window.othersCounter = document.getElementById("others").getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
	</script>

	<?php } else if (Yii::$app->controller->action->id == 'create') {?>
	<tr id="others-row1">
		<td>
			<div class="field-verb-others-<?="1"?>-vrsta has-success">
				<input type="text" name="Verb[others][<?="1"?>][vrsta]" id="verb-others-<?="1"?>-vrsta" class="col-xs-8 form-control" style="padding: 1px;">
			</div>
		</td>
		<td>
			<div class="field-verb-others-<?="1"?>-native has-success">
				<input type="text" name="Verb[others][<?="1"?>][native]" id="verb-others-<?="1"?>-native" class="col-xs-8 form-control" style="padding: 1px;">
			</div>
		</td>
		<td>
			<div class="field-verb-others-<?="1"?>-translated has-success">
				<input type="text" name="Verb[others][<?="1"?>][translated]" id="verb-others-<?="1"?>-translated" class="col-xs-8 form-control" style="padding: 1px;">
			</div>
		</td>
	</tr>
	<tfoot>
		<td>
			<?=Html::button('Add a part of Speech', ['id' => 'addOther', 'class' => 'btn btn-primary', 'onclick' => 'addRow("others");']);?>
		</td>
		<td>
			<?=Html::button('Del a part of Speech', ['id' => 'delOther', 'class' => 'btn btn-danger', 'onclick' => 'delRow("others");']);?>
		</td>
	</tfoot>
	<?php } else if (Yii::$app->controller->action->id == 'view') {
    ?>
		<?php
if (!empty($model->others)) {
        $model->others = json_decode($model->others, true);
        foreach ($model->others as $key => $value) {
            echo '<tr>';
            foreach ($value as $key2 => $value2) {
                echo '<td>' . $value2 . '</td>';
            }
            echo '</tr>';
        }
    }
    ?>
	<?php }?>
</tbody>
</table>
