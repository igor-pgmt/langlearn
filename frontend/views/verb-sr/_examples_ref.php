<?php

use yii\helpers\Html;

?>

<table id="examples">
	<thead>
		<tr>
			<td>Возвратный Пример</td>
			<td>Перевод</td>
		</tr>
	</thead>
	<tbody>
	<?php if (Yii::$app->controller->action->id == 'update') {
    ?>
		<?php
if ($examples) {
        foreach ($model->examples as $key => $value) {
            echo '<tr>';
            foreach ($value as $key2 => $value2) {
                $str = 'examples[' . $key . '][' . $key2 . ']';
                echo '<td>' . $form->field($model, $str, ['errorOptions' => ['tag' => null]])->textarea(['class' => 'col-xs-8 form-control', 'style' => 'padding: 1px;'])->label(false) . '</td>';
            }
            echo '</tr>';
        }
    }
    ?>
	<tfoot>
		<td>
			<?=Html::button('Add an example', ['id' => 'addExample', 'class' => 'btn btn-primary', 'onclick' => 'addRow("examples");']);?>
		</td>
		<td>
			<?=Html::button('Del an example', ['id' => 'delExample', 'class' => 'btn btn-danger', 'onclick' => 'delRow("examples");']);?>
		</td>
	</tfoot>

	<script>
	window.examplesCounter = document.getElementById("examples").getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
	</script>

	<?php } else if (Yii::$app->controller->action->id == 'create') {?>
	<tr>
		<td>
			<div class="field-verb-examples-<?="1"?>-native has-success">
				<input type="text" name="Verb[examples][<?="1"?>][native]" id="verb-examples-<?="1"?>-native" class="col-xs-8 form-control" style="padding: 1px;">
			</div>
		</td>
		<td>
			<div class="field-verb-examples-<?="1"?>-translated has-success">
				<input type="text" name="Verb[examples][<?="1"?>][translated]" id="verb-examples-<?="1"?>-translated" class="col-xs-8 form-control" style="padding: 1px;">
			</div>
		</td>
	</tr>
	<tfoot>
		<td>
			<?=Html::button('Add an example', ['id' => 'addExample', 'class' => 'btn btn-primary', 'onclick' => 'addRow("examples");']);?>
		</td>
		<td>
			<?=Html::button('Del an example', ['id' => 'delExample', 'class' => 'btn btn-danger', 'onclick' => 'delRow("examples");']);?>
		</td>
	</tfoot>
	<?php } else if (Yii::$app->controller->action->id == 'view') {
    ?>
		<?php
if ($examples) {
        $examples = json_decode($examples, true);
        foreach ($examples as $value) {
            echo '<tr>';
            foreach ($value as $value2) {
                echo '<td>' . $value2 . '</td>';
            }
            echo '</tr>';
        }
    }
    ?>
	<?php }?>
</tbody>
</table>
