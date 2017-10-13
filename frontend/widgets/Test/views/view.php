<?php
	use yii\helpers\Html;
?>
<table border="1">
<thead>
<tr>

<?php
//добавляем пустое поле перед массивом с заголовками
$shifted_headers = $pluginOptions['columnHeaders'];
array_unshift($shifted_headers, '');
 foreach ($shifted_headers as $columnHeader) { ?>
	<td>
	<?= $columnHeader; ?>
	</td>
<?php } ?>
</tr>
</thead>
	<tbody>



		<?php for ($i=0; $i < $pluginOptions['rows']; $i++) { ?>
			<tr>
				<td>
					<?= $pluginOptions['rowHeaders'][$i] ?>
				</td>
				<?php for ($j=0; $j < $pluginOptions['columns']; $j++) { ?>
					<td>
						<div class='form-group field-<?= Yii::$app->controller->id ?>-<?= $pluginOptions['tableName'] ?>-<?= $pluginOptions['rowHeaders'][$i] ?>-<?= $pluginOptions['columnHeaders'][$j] ?>' style='<?= Html::encode($pluginOptions['divStyle']) ?>'>

							<input type ='text' id='<?= Yii::$app->controller->id ?>-<?= $pluginOptions['tableName'] ?>-<?= $pluginOptions['rowHeaders'][$i] ?>-<?= $pluginOptions['columnHeaders'][$j] ?>' class='<?= $pluginOptions['inputClass'] ?>' name='<?= ucfirst(Yii::$app->controller->id) ?>[<?= $pluginOptions['tableName'] ?>][<?= $pluginOptions['rowHeaders'][$i] ?>][<?= $pluginOptions['columnHeaders'][$j] ?>]' style='<?= Html::encode($pluginOptions['inputStyle']) ?>' >

						</div>
					</td>
				<?php } ?>
			</tr>
		<?php } ?>





	</tbody>
</table>

