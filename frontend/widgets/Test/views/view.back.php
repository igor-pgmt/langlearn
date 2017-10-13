<?php
	use frontend\components\Translit;
	use yii\helpers\Html;
?>
<table border="1">
<thead>
<tr>

<?php
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


<?php if (['in', Yii::$app->controller->action->id, ['create', 'update', 'testing']]) { ?>

		<?php for ($i=0; $i < $pluginOptions['rows']; $i++) { ?>
			<tr>
				<td>
					<?= $pluginOptions['rowHeaders'][$i] ?>
				</td>
				<?php for ($j=0; $j < $pluginOptions['columns']; $j++) { ?>
					<td>
						<div class='form-group field-<?= Yii::$app->controller->id ?>-<?= Translit::t($pluginOptions['tableName']) ?>-<?= Translit::t($pluginOptions['rowHeaders'][$i]) ?>-<?= Translit::t($pluginOptions['columnHeaders'][$j]) ?>' style='<?= Html::encode($pluginOptions['divStyle']) ?>'>

<?php $str=Translit::t($pluginOptions['tableName']).'['.$i.']['.$j.']' ?>

							<!-- <input type ='text' id='<?= Yii::$app->controller->id ?>-<?= Translit::t($pluginOptions['tableName']) ?>-<?= Translit::t($pluginOptions['rowHeaders'][$i]) ?>-<?= Translit::t($pluginOptions['columnHeaders'][$j]) ?>' class='<?= $pluginOptions['inputClass'] ?>' name='<?= ucfirst(Yii::$app->controller->id) ?>[<?= Translit::t($pluginOptions['tableName']) ?>][<?= Translit::t($pluginOptions['rowHeaders'][$i]) ?>][<?= Translit::t($pluginOptions['columnHeaders'][$j]) ?>]' style='<?= Html::encode($pluginOptions['inputStyle']) ?>' > -->
							<!-- <input type ='text' id='<?= '['.$i.']['.$j.']' ?>' class='<?= $pluginOptions['inputClass'] ?>' name='<?= ucfirst(Yii::$app->controller->id) ?>[<?= Translit::t($pluginOptions['tableName']) ?>][<?= Translit::t($pluginOptions['rowHeaders'][$i]) ?>][<?= Translit::t($pluginOptions['columnHeaders'][$j]) ?>]' style='<?= Html::encode($pluginOptions['inputStyle']) ?>' > -->


						</div>
					</td>
				<?php } ?>
			</tr>
		<?php } ?>

<?php } elseif (in_array(Yii::$app->controller->action->id, ['view']) ) { ?>








<?php } ?>



	</tbody>
</table>

		<div class='form-group'>
			<?= Html::submitButton(Yii::t('frontend', 'testing'), ['class' =>'btn btn-primary']) ?>
		</div>