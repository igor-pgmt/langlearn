<?php

use yii\helpers\Html;

?>

<style type="text/css">
	.inp_text{
	width:100px;
	}
	#meanings {
	display:inline-block;
	width:550px;
	overflow:hidden;

	}
	#meanings td,#table2 td {
		width:auto;
	}
</style>
<table id="meanings">
	<thead>
		<tr>
			<td>Значение</td>
			<td>Перевод</td>
		</tr>
	</thead>
	<tbody>
	<?php if (Yii::$app->controller->action->id == 'update') { ?>
		<?php
			if ($meanings) {
				foreach ($model->meanings as $key => $value) {
					echo '<tr>';
					foreach ($value as $key2 => $value2) {
						$str='meanings['.$key.']['.$key2.']';
						echo '<td>'.$form->field($model, $str, [])->textarea(['class' => 'col-xs-8 form-control', 'style' => 'padding: 1px;'])->label(false).'<td>';
					}
					echo '</tr>';
				}
			}
		?>
	<tfoot>
		<td>
			<?= Html::button('Add a meaning', [ 'id' => 'addMeaning', 'class' => 'btn btn-primary', 'onclick' => 'addRow("meanings");']); ?>
		</td>
		<td>
			<?= Html::button('Del a meaning', [ 'id' => 'delMeaning', 'class' => 'btn btn-danger', 'onclick' => 'delRow("meanings");']); ?>
		</td>
	</tfoot>

	<script>
	window.meaningsCounter = document.getElementById("meanings").getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
	</script>

	<?php } else if (Yii::$app->controller->action->id == 'create') { ?>
	<tr>
		<td>
			<div class="field-verb-meanings-<?= "1" ?>-native has-success">
				<textarea name="Verb[meanings][<?= "1" ?>][native]" id="verb-meanings-<?= "1" ?>-native" class="col-xs-8 form-control" style="padding: 1px;"></textarea>
			</div>
		</td>
		<td>
			<div class="field-verb-meanings-<?= "1" ?>-translated has-success">
				<textarea name="Verb[meanings][<?= "1" ?>][translated]" id="verb-meanings-<?= "1" ?>-translated" class="col-xs-8 form-control" style="padding: 1px;"></textarea>
			</div>
		</td>
	</tr>
	<tfoot>
		<td>
			<?= Html::button('Add a meaning', [ 'id' => 'addMeaning', 'class' => 'btn btn-primary', 'onclick' => 'addRow("meanings");']); ?>
		</td>
		<td>
			<?= Html::button('Del a meaning', [ 'id' => 'delMeaning', 'class' => 'btn btn-danger', 'onclick' => 'delRow("meanings");']); ?>
		</td>
	</tfoot>
	<?php } else if (Yii::$app->controller->action->id == 'view') { ?>
		<?php
			if ($meanings) {
				$meanings = json_decode($meanings, true);
				foreach ($meanings as $key => $value) {
					echo '<tr>';
					foreach ($value as $key2 => $value2) {
						echo '<td>'.$meanings[$key][$key2].'<td>';
					}
					echo '</tr>';
				}
			}
		?>
	<?php } ?>
</tbody>
</table>
