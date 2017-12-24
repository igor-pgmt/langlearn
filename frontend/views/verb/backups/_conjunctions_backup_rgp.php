<?php
use yii\bootstrap\Button;
use yii\helpers\Html;

if (Yii::$app->controller->action->id == 'view') {
    $conjunction = json_decode($conjunction, true);
}

?>

	<?php if (in_array(Yii::$app->controller->action->id, ['create', 'update'])) {?>
<div id="table1" style="width: 100%; overflow: auto;">
	<table style="float: left;">
		<thead>
			<tr>
				<td colspan="4" onclick="rgpf();">Радни глаголски придев <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'rgpf();', 'style' => 'height: 16px;']);?></td>
			</tr>
			<tr>
				<td><span></span></td>
				<td>мужской род</td>
				<td>женский род</td>
				<td>средний род</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
			</tr>
		</tbody>
	</table>
	<table>
		<thead>
			<tr>
				<td colspan="4">Радни глаголски придев</td>
			</tr>
			<tr>
				<td><span></span></td>
				<td>мужской род</td>
				<td>женский род</td>
				<td>средний род</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ми</span></td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
			</tr>
			<tr>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[rgp][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
			</tr>
			<tr>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[rgp][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
				<td>
					<?=$form->field($model, 'conjunction[rgp][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?>
				</td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Презент</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[present][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[present][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[present][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[present][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[present][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[present][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Аорист <?=Html::button('Generate 1', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'aorist1();', 'style' => 'height: 16px;']);?><?=Html::button('Generate 2', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'aorist2();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Перфекат</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[perfekat][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[perfekat][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[perfekat][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[perfekat][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[perfekat][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[perfekat][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Имперфекат <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'imperfekat1();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Имперфекат (v2)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat2][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat2][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat2][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat2][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat2][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat2][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v1)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v2)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v3)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Потенцијал</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[potencijal][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[potencijal][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[potencijal][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[potencijal][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[potencijal][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[potencijal][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Потенцијал прошли</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Императив <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'imperativ1();', 'style' => 'height: 16px;']);?><?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'imperativ2();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Футур I (v1) <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'futur11();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Футур I (v2) <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'futur12();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Футур I (v3) <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'futur13();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Футур II <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'futur2();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[futur2][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[futur2][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[futur2][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[futur2][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[futur2][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[futur2][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="6">Глаголски придев трпни <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'gpt();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Он</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][m][singular]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Она</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][f][singular]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Оно</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][n][singular]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][m][plural]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Оне</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][f][plural]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><span>Она</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][n][plural]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

























</div>
<?php } elseif (in_array(Yii::$app->controller->action->id, ['view'])) {
    ?>

<div id="table1" style="width: 100%; overflow: auto;">
	<table style="float: left;">
		<thead>
			<tr>
				<td colspan="4">Радни глаголски придев</td>
			</tr>
			<tr>
				<td><span></span></td>
				<td>мужской род</td>
				<td>женский род</td>
				<td>средний род</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td>
					<?=$conjunction['rgp']['I']['m']?>
				</td>
				<td>
					<?=$conjunction['rgp']['I']['f']?>
				</td>
				<td>
					<?=$conjunction['rgp']['I']['n']?>
				</td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td>
					<?=$conjunction['rgp']['Thou']['m']?>
				</td>
				<td>
					<?=$conjunction['rgp']['Thou']['f']?>
				</td>
				<td>
					<?=$conjunction['rgp']['Thou']['n']?>
				</td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td>
					<?=$conjunction['rgp']['HeSheIt']['m']?>
				</td>
				<td>
					<?=$conjunction['rgp']['HeSheIt']['f']?>
				</td>
				<td>
					<?=$conjunction['rgp']['HeSheIt']['n']?>
				</td>
			</tr>
		</tbody>
	</table>
	<table>
		<thead>
			<tr>
				<td colspan="4">Радни глаголски придев</td>
			</tr>
			<tr>
				<td><span></span></td>
				<td>мужской род</td>
				<td>женский род</td>
				<td>средний род</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ми</span></td>
				<td>
					<?=$conjunction['rgp']['We']['m']?>
				</td>
				<td>
					<?=$conjunction['rgp']['We']['f']?>
				</td>
				<td>
					<?=$conjunction['rgp']['We']['n']?>
				</td>
			</tr>
			<tr>
				<td><span>Ви</span></td>
				<td>
					<?=$conjunction['rgp']['You']['m']?>
				</td>
				<td>
					<?=$conjunction['rgp']['You']['f']?>
				</td>
				<td>
					<?=$conjunction['rgp']['You']['n']?>
				</td>
			</tr>
			<tr>
				<td><span>Они(е,а)</span></td>
				<td>
					<?=$conjunction['rgp']['They']['m']?>
				</td>
				<td>
					<?=$conjunction['rgp']['They']['f']?>
				</td>
				<td>
					<?=$conjunction['rgp']['They']['n']?>
				</td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Презент</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['present']['I']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['present']['We']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['present']['Thou']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['present']['You']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['present']['HeSheIt']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['present']['They']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Аорист</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['aorist']['I']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['aorist']['We']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['aorist']['Thou']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['aorist']['You']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['aorist']['HeSheIt']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['aorist']['They']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Перфекат</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['perfekat']['I']['m']?></td>
				<td><?=$conjunction['perfekat']['I']['f']?></td>
				<td><?=$conjunction['perfekat']['I']['n']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['perfekat']['We']['m']?></td>
				<td><?=$conjunction['perfekat']['We']['f']?></td>
				<td><?=$conjunction['perfekat']['We']['n']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['perfekat']['Thou']['m']?></td>
				<td><?=$conjunction['perfekat']['Thou']['f']?></td>
				<td><?=$conjunction['perfekat']['Thou']['n']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['perfekat']['You']['m']?></td>
				<td><?=$conjunction['perfekat']['You']['f']?></td>
				<td><?=$conjunction['perfekat']['You']['n']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['perfekat']['HeSheIt']['m']?></td>
				<td><?=$conjunction['perfekat']['HeSheIt']['f']?></td>
				<td><?=$conjunction['perfekat']['HeSheIt']['n']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['perfekat']['They']['m']?></td>
				<td><?=$conjunction['perfekat']['They']['f']?></td>
				<td><?=$conjunction['perfekat']['They']['n']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Имперфекат (v1)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['imperfekat1']['I']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['imperfekat1']['We']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['imperfekat1']['Thou']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['imperfekat1']['You']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['imperfekat1']['HeSheIt']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['imperfekat1']['They']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Имперфекат (v2)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['imperfekat2']['I']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['imperfekat2']['We']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['imperfekat2']['Thou']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['imperfekat2']['You']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['imperfekat2']['HeSheIt']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['imperfekat2']['They']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v1)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['pluskvamperfekat1']['I']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat1']['I']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat1']['I']['n']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['pluskvamperfekat1']['We']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat1']['We']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat1']['We']['n']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['pluskvamperfekat1']['Thou']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat1']['Thou']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat1']['Thou']['n']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['pluskvamperfekat1']['You']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat1']['You']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat1']['You']['n']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['pluskvamperfekat1']['HeSheIt']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat1']['HeSheIt']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat1']['HeSheIt']['n']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['pluskvamperfekat1']['They']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat1']['They']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat1']['They']['n']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v2)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['pluskvamperfekat2']['I']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat2']['I']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat2']['I']['n']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['pluskvamperfekat2']['We']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat2']['We']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat2']['We']['n']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['pluskvamperfekat2']['Thou']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat2']['Thou']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat2']['Thou']['n']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['pluskvamperfekat2']['You']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat2']['You']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat2']['You']['n']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['pluskvamperfekat2']['HeSheIt']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat2']['HeSheIt']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat2']['HeSheIt']['n']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['pluskvamperfekat2']['They']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat2']['They']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat2']['They']['n']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v3)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['pluskvamperfekat3']['I']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat3']['I']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat3']['I']['n']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['pluskvamperfekat3']['We']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat3']['We']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat3']['We']['n']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['pluskvamperfekat3']['Thou']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat3']['Thou']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat3']['Thou']['n']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['pluskvamperfekat3']['You']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat3']['You']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat3']['You']['n']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['pluskvamperfekat3']['HeSheIt']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat3']['HeSheIt']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat3']['HeSheIt']['n']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['pluskvamperfekat3']['They']['m']?></td>
				<td><?=$conjunction['pluskvamperfekat3']['They']['f']?></td>
				<td><?=$conjunction['pluskvamperfekat3']['They']['n']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Потенцијал</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['potencijal']['I']['m']?></td>
				<td><?=$conjunction['potencijal']['I']['f']?></td>
				<td><?=$conjunction['potencijal']['I']['n']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['potencijal']['We']['m']?></td>
				<td><?=$conjunction['potencijal']['We']['f']?></td>
				<td><?=$conjunction['potencijal']['We']['n']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['potencijal']['Thou']['m']?></td>
				<td><?=$conjunction['potencijal']['Thou']['f']?></td>
				<td><?=$conjunction['potencijal']['Thou']['n']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['potencijal']['You']['m']?></td>
				<td><?=$conjunction['potencijal']['You']['f']?></td>
				<td><?=$conjunction['potencijal']['You']['n']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['potencijal']['HeSheIt']['m']?></td>
				<td><?=$conjunction['potencijal']['HeSheIt']['f']?></td>
				<td><?=$conjunction['potencijal']['HeSheIt']['n']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['potencijal']['They']['m']?></td>
				<td><?=$conjunction['potencijal']['They']['f']?></td>
				<td><?=$conjunction['potencijal']['They']['n']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Императив</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['imperativ']['I']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['imperativ']['We']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['imperativ']['Thou']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['imperativ']['You']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['imperativ']['HeSheIt']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['imperativ']['They']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Футур I (v1)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['futur11']['I']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['futur11']['We']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['futur11']['Thou']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['futur11']['You']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['futur11']['HeSheIt']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['futur11']['They']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Футур I (v2)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['futur12']['I']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['futur12']['We']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['futur12']['Thou']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['futur12']['You']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['futur12']['HeSheIt']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['futur12']['They']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Футур I (v3)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['futur13']['I']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['futur13']['We']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['futur13']['Thou']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['futur13']['You']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['futur13']['HeSheIt']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['futur13']['They']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Футур II</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
				<td><span></span></td>
				<td>Мужской</td>
				<td>Женский</td>
				<td>Средний</td>
			</tr>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$conjunction['futur2']['I']['m']?></td>
				<td><?=$conjunction['futur2']['I']['f']?></td>
				<td><?=$conjunction['futur2']['I']['n']?></td>
				<td><span>Ми</span></td>
				<td><?=$conjunction['futur2']['We']['m']?></td>
				<td><?=$conjunction['futur2']['We']['f']?></td>
				<td><?=$conjunction['futur2']['We']['n']?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$conjunction['futur2']['Thou']['m']?></td>
				<td><?=$conjunction['futur2']['Thou']['f']?></td>
				<td><?=$conjunction['futur2']['Thou']['n']?></td>
				<td><span>Ви</span></td>
				<td><?=$conjunction['futur2']['You']['m']?></td>
				<td><?=$conjunction['futur2']['You']['f']?></td>
				<td><?=$conjunction['futur2']['You']['n']?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$conjunction['futur2']['HeSheIt']['m']?></td>
				<td><?=$conjunction['futur2']['HeSheIt']['f']?></td>
				<td><?=$conjunction['futur2']['HeSheIt']['n']?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$conjunction['futur2']['They']['m']?></td>
				<td><?=$conjunction['futur2']['They']['f']?></td>
				<td><?=$conjunction['futur2']['They']['n']?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="6">Глаголски придев трпни</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Он</span></td>
				<td><?=$conjunction['gpt']['m']['singular']?></td>
				<td><span>Она</span></td>
				<td><?=$conjunction['gpt']['f']['singular']?></td>
				<td><span>Оно</span></td>
				<td><?=$conjunction['gpt']['n']['singular']?></td>
			</tr>
			<tr>
				<td><span>Они</span></td>
				<td><?=$conjunction['gpt']['m']['plural']?></td>
				<td><span>Оне</span></td>
				<td><?=$conjunction['gpt']['f']['plural']?></td>
				<td><span>Она</span></td>
				<td><?=$conjunction['gpt']['n']['plural']?></td>
			</tr>
		</tbody>
	</table>






















<div id="table-container" style="width: 100%; overflow: auto;">

</div>
<?php }?>


<script>
$(document).ready(function() {
	rgpms = {
		'I-m':document.getElementById('verb-conjunction-rgp-i-m'),
		'I-f':document.getElementById('verb-conjunction-rgp-i-f'),
		'I-n':document.getElementById('verb-conjunction-rgp-i-n'),
		'Thou-m':document.getElementById('verb-conjunction-rgp-thou-m'),
		'Thou-f':document.getElementById('verb-conjunction-rgp-thou-f'),
		'Thou-n':document.getElementById('verb-conjunction-rgp-thou-n'),
		'HeSheIt-m':document.getElementById('verb-conjunction-rgp-hesheit-m'),
		'HeSheIt-f':document.getElementById('verb-conjunction-rgp-hesheit-f'),
		'HeSheIt-n':document.getElementById('verb-conjunction-rgp-hesheit-n'),

		'We-m':document.getElementById('verb-conjunction-rgp-we-m'),
		'We-f':document.getElementById('verb-conjunction-rgp-we-f'),
		'We-n':document.getElementById('verb-conjunction-rgp-we-n'),
		'You-m':document.getElementById('verb-conjunction-rgp-you-m'),
		'You-f':document.getElementById('verb-conjunction-rgp-you-f'),
		'You-n':document.getElementById('verb-conjunction-rgp-you-n'),
		'They-m':document.getElementById('verb-conjunction-rgp-they-m'),
		'They-f':document.getElementById('verb-conjunction-rgp-they-f'),
		'They-n':document.getElementById('verb-conjunction-rgp-they-n'),
	}

	perfekat = {
		'I-m':document.getElementById('verb-conjunction-perfekat-i-m'),
		'I-f':document.getElementById('verb-conjunction-perfekat-i-f'),
		'I-n':document.getElementById('verb-conjunction-perfekat-i-n'),
		'Thou-m':document.getElementById('verb-conjunction-perfekat-thou-m'),
		'Thou-f':document.getElementById('verb-conjunction-perfekat-thou-f'),
		'Thou-n':document.getElementById('verb-conjunction-perfekat-thou-n'),
		'HeSheIt-m':document.getElementById('verb-conjunction-perfekat-hesheit-m'),
		'HeSheIt-f':document.getElementById('verb-conjunction-perfekat-hesheit-f'),
		'HeSheIt-n':document.getElementById('verb-conjunction-perfekat-hesheit-n'),

		'We-m':document.getElementById('verb-conjunction-perfekat-we-m'),
		'We-f':document.getElementById('verb-conjunction-perfekat-we-f'),
		'We-n':document.getElementById('verb-conjunction-perfekat-we-n'),
		'You-m':document.getElementById('verb-conjunction-perfekat-you-m'),
		'You-f':document.getElementById('verb-conjunction-perfekat-you-f'),
		'You-n':document.getElementById('verb-conjunction-perfekat-you-n'),
		'They-m':document.getElementById('verb-conjunction-perfekat-they-m'),
		'They-f':document.getElementById('verb-conjunction-perfekat-they-f'),
		'They-n':document.getElementById('verb-conjunction-perfekat-they-n'),
	}

	pluskvamperfekat1 = {
		'I-m':document.getElementById('verb-conjunction-pluskvamperfekat1-i-m'),
		'I-f':document.getElementById('verb-conjunction-pluskvamperfekat1-i-f'),
		'I-n':document.getElementById('verb-conjunction-pluskvamperfekat1-i-n'),
		'Thou-m':document.getElementById('verb-conjunction-pluskvamperfekat1-thou-m'),
		'Thou-f':document.getElementById('verb-conjunction-pluskvamperfekat1-thou-f'),
		'Thou-n':document.getElementById('verb-conjunction-pluskvamperfekat1-thou-n'),
		'HeSheIt-m':document.getElementById('verb-conjunction-pluskvamperfekat1-hesheit-m'),
		'HeSheIt-f':document.getElementById('verb-conjunction-pluskvamperfekat1-hesheit-f'),
		'HeSheIt-n':document.getElementById('verb-conjunction-pluskvamperfekat1-hesheit-n'),

		'We-m':document.getElementById('verb-conjunction-pluskvamperfekat1-we-m'),
		'We-f':document.getElementById('verb-conjunction-pluskvamperfekat1-we-f'),
		'We-n':document.getElementById('verb-conjunction-pluskvamperfekat1-we-n'),
		'You-m':document.getElementById('verb-conjunction-pluskvamperfekat1-you-m'),
		'You-f':document.getElementById('verb-conjunction-pluskvamperfekat1-you-f'),
		'You-n':document.getElementById('verb-conjunction-pluskvamperfekat1-you-n'),
		'They-m':document.getElementById('verb-conjunction-pluskvamperfekat1-they-m'),
		'They-f':document.getElementById('verb-conjunction-pluskvamperfekat1-they-f'),
		'They-n':document.getElementById('verb-conjunction-pluskvamperfekat1-they-n'),
	}

	pluskvamperfekat2 = {
		'I-m':document.getElementById('verb-conjunction-pluskvamperfekat2-i-m'),
		'I-f':document.getElementById('verb-conjunction-pluskvamperfekat2-i-f'),
		'I-n':document.getElementById('verb-conjunction-pluskvamperfekat2-i-n'),
		'Thou-m':document.getElementById('verb-conjunction-pluskvamperfekat2-thou-m'),
		'Thou-f':document.getElementById('verb-conjunction-pluskvamperfekat2-thou-f'),
		'Thou-n':document.getElementById('verb-conjunction-pluskvamperfekat2-thou-n'),
		'HeSheIt-m':document.getElementById('verb-conjunction-pluskvamperfekat2-hesheit-m'),
		'HeSheIt-f':document.getElementById('verb-conjunction-pluskvamperfekat2-hesheit-f'),
		'HeSheIt-n':document.getElementById('verb-conjunction-pluskvamperfekat2-hesheit-n'),

		'We-m':document.getElementById('verb-conjunction-pluskvamperfekat2-we-m'),
		'We-f':document.getElementById('verb-conjunction-pluskvamperfekat2-we-f'),
		'We-n':document.getElementById('verb-conjunction-pluskvamperfekat2-we-n'),
		'You-m':document.getElementById('verb-conjunction-pluskvamperfekat2-you-m'),
		'You-f':document.getElementById('verb-conjunction-pluskvamperfekat2-you-f'),
		'You-n':document.getElementById('verb-conjunction-pluskvamperfekat2-you-n'),
		'They-m':document.getElementById('verb-conjunction-pluskvamperfekat2-they-m'),
		'They-f':document.getElementById('verb-conjunction-pluskvamperfekat2-they-f'),
		'They-n':document.getElementById('verb-conjunction-pluskvamperfekat2-they-n'),
	}

	pluskvamperfekat3 = {
		'I-m':document.getElementById('verb-conjunction-pluskvamperfekat3-i-m'),
		'I-f':document.getElementById('verb-conjunction-pluskvamperfekat3-i-f'),
		'I-n':document.getElementById('verb-conjunction-pluskvamperfekat3-i-n'),
		'Thou-m':document.getElementById('verb-conjunction-pluskvamperfekat3-thou-m'),
		'Thou-f':document.getElementById('verb-conjunction-pluskvamperfekat3-thou-f'),
		'Thou-n':document.getElementById('verb-conjunction-pluskvamperfekat3-thou-n'),
		'HeSheIt-m':document.getElementById('verb-conjunction-pluskvamperfekat3-hesheit-m'),
		'HeSheIt-f':document.getElementById('verb-conjunction-pluskvamperfekat3-hesheit-f'),
		'HeSheIt-n':document.getElementById('verb-conjunction-pluskvamperfekat3-hesheit-n'),

		'We-m':document.getElementById('verb-conjunction-pluskvamperfekat3-we-m'),
		'We-f':document.getElementById('verb-conjunction-pluskvamperfekat3-we-f'),
		'We-n':document.getElementById('verb-conjunction-pluskvamperfekat3-we-n'),
		'You-m':document.getElementById('verb-conjunction-pluskvamperfekat3-you-m'),
		'You-f':document.getElementById('verb-conjunction-pluskvamperfekat3-you-f'),
		'You-n':document.getElementById('verb-conjunction-pluskvamperfekat3-you-n'),
		'They-m':document.getElementById('verb-conjunction-pluskvamperfekat3-they-m'),
		'They-f':document.getElementById('verb-conjunction-pluskvamperfekat3-they-f'),
		'They-n':document.getElementById('verb-conjunction-pluskvamperfekat3-they-n'),
	}

	potencijal = {
		'I-m':document.getElementById('verb-conjunction-potencijal-i-m'),
		'I-f':document.getElementById('verb-conjunction-potencijal-i-f'),
		'I-n':document.getElementById('verb-conjunction-potencijal-i-n'),
		'Thou-m':document.getElementById('verb-conjunction-potencijal-thou-m'),
		'Thou-f':document.getElementById('verb-conjunction-potencijal-thou-f'),
		'Thou-n':document.getElementById('verb-conjunction-potencijal-thou-n'),
		'HeSheIt-m':document.getElementById('verb-conjunction-potencijal-hesheit-m'),
		'HeSheIt-f':document.getElementById('verb-conjunction-potencijal-hesheit-f'),
		'HeSheIt-n':document.getElementById('verb-conjunction-potencijal-hesheit-n'),

		'We-m':document.getElementById('verb-conjunction-potencijal-we-m'),
		'We-f':document.getElementById('verb-conjunction-potencijal-we-f'),
		'We-n':document.getElementById('verb-conjunction-potencijal-we-n'),
		'You-m':document.getElementById('verb-conjunction-potencijal-you-m'),
		'You-f':document.getElementById('verb-conjunction-potencijal-you-f'),
		'You-n':document.getElementById('verb-conjunction-potencijal-you-n'),
		'They-m':document.getElementById('verb-conjunction-potencijal-they-m'),
		'They-f':document.getElementById('verb-conjunction-potencijal-they-f'),
		'They-n':document.getElementById('verb-conjunction-potencijal-they-n'),
	}

	potencijalprosli = {
		'I-m':document.getElementById('verb-conjunction-potencijalprosli-i-m'),
		'I-f':document.getElementById('verb-conjunction-potencijalprosli-i-f'),
		'I-n':document.getElementById('verb-conjunction-potencijalprosli-i-n'),
		'Thou-m':document.getElementById('verb-conjunction-potencijalprosli-thou-m'),
		'Thou-f':document.getElementById('verb-conjunction-potencijalprosli-thou-f'),
		'Thou-n':document.getElementById('verb-conjunction-potencijalprosli-thou-n'),
		'HeSheIt-m':document.getElementById('verb-conjunction-potencijalprosli-hesheit-m'),
		'HeSheIt-f':document.getElementById('verb-conjunction-potencijalprosli-hesheit-f'),
		'HeSheIt-n':document.getElementById('verb-conjunction-potencijalprosli-hesheit-n'),

		'We-m':document.getElementById('verb-conjunction-potencijalprosli-we-m'),
		'We-f':document.getElementById('verb-conjunction-potencijalprosli-we-f'),
		'We-n':document.getElementById('verb-conjunction-potencijalprosli-we-n'),
		'You-m':document.getElementById('verb-conjunction-potencijalprosli-you-m'),
		'You-f':document.getElementById('verb-conjunction-potencijalprosli-you-f'),
		'You-n':document.getElementById('verb-conjunction-potencijalprosli-you-n'),
		'They-m':document.getElementById('verb-conjunction-potencijalprosli-they-m'),
		'They-f':document.getElementById('verb-conjunction-potencijalprosli-they-f'),
		'They-n':document.getElementById('verb-conjunction-potencijalprosli-they-n'),
	}

	futur2 = {
		'I-m':document.getElementById('verb-conjunction-futur2-i-m'),
		'I-f':document.getElementById('verb-conjunction-futur2-i-f'),
		'I-n':document.getElementById('verb-conjunction-futur2-i-n'),
		'Thou-m':document.getElementById('verb-conjunction-futur2-thou-m'),
		'Thou-f':document.getElementById('verb-conjunction-futur2-thou-f'),
		'Thou-n':document.getElementById('verb-conjunction-futur2-thou-n'),
		'HeSheIt-m':document.getElementById('verb-conjunction-futur2-hesheit-m'),
		'HeSheIt-f':document.getElementById('verb-conjunction-futur2-hesheit-f'),
		'HeSheIt-n':document.getElementById('verb-conjunction-futur2-hesheit-n'),

		'We-m':document.getElementById('verb-conjunction-futur2-we-m'),
		'We-f':document.getElementById('verb-conjunction-futur2-we-f'),
		'We-n':document.getElementById('verb-conjunction-futur2-we-n'),
		'You-m':document.getElementById('verb-conjunction-futur2-you-m'),
		'You-f':document.getElementById('verb-conjunction-futur2-you-f'),
		'You-n':document.getElementById('verb-conjunction-futur2-you-n'),
		'They-m':document.getElementById('verb-conjunction-futur2-they-m'),
		'They-f':document.getElementById('verb-conjunction-futur2-they-f'),
		'They-n':document.getElementById('verb-conjunction-futur2-they-n'),
	}

	aorist = {
		'I-m':document.getElementById('verb-conjunction-futur2-i-m'),
		'I-f':document.getElementById('verb-conjunction-futur2-i-f'),
		'I-n':document.getElementById('verb-conjunction-futur2-i-n'),
		'Thou-m':document.getElementById('verb-conjunction-futur2-thou-m'),
		'Thou-f':document.getElementById('verb-conjunction-futur2-thou-f'),
		'Thou-n':document.getElementById('verb-conjunction-futur2-thou-n'),
		'HeSheIt-m':document.getElementById('verb-conjunction-futur2-hesheit-m'),
		'HeSheIt-f':document.getElementById('verb-conjunction-futur2-hesheit-f'),
		'HeSheIt-n':document.getElementById('verb-conjunction-futur2-hesheit-n'),

		'We-m':document.getElementById('verb-conjunction-futur2-we-m'),
		'We-f':document.getElementById('verb-conjunction-futur2-we-f'),
		'We-n':document.getElementById('verb-conjunction-futur2-we-n'),
		'You-m':document.getElementById('verb-conjunction-futur2-you-m'),
		'You-f':document.getElementById('verb-conjunction-futur2-you-f'),
		'You-n':document.getElementById('verb-conjunction-futur2-you-n'),
		'They-m':document.getElementById('verb-conjunction-futur2-they-m'),
		'They-f':document.getElementById('verb-conjunction-futur2-they-f'),
		'They-n':document.getElementById('verb-conjunction-futur2-they-n'),
	}


})

function rgpf() {

document.getElementById('verb-conjunction-rgp-thou-m').value = document.getElementById('verb-conjunction-rgp-i-m').value
document.getElementById('verb-conjunction-rgp-hesheit-m').value = document.getElementById('verb-conjunction-rgp-i-m').value
document.getElementById('verb-conjunction-rgp-thou-f').value = document.getElementById('verb-conjunction-rgp-i-f').value
document.getElementById('verb-conjunction-rgp-hesheit-f').value = document.getElementById('verb-conjunction-rgp-i-f').value
document.getElementById('verb-conjunction-rgp-thou-n').value = document.getElementById('verb-conjunction-rgp-i-n').value
document.getElementById('verb-conjunction-rgp-hesheit-n').value = document.getElementById('verb-conjunction-rgp-i-n').value

document.getElementById('verb-conjunction-rgp-you-m').value = document.getElementById('verb-conjunction-rgp-we-m').value
document.getElementById('verb-conjunction-rgp-they-m').value = document.getElementById('verb-conjunction-rgp-we-m').value
document.getElementById('verb-conjunction-rgp-you-f').value = document.getElementById('verb-conjunction-rgp-we-f').value
document.getElementById('verb-conjunction-rgp-they-f').value = document.getElementById('verb-conjunction-rgp-we-f').value
document.getElementById('verb-conjunction-rgp-you-n').value = document.getElementById('verb-conjunction-rgp-we-n').value
document.getElementById('verb-conjunction-rgp-they-n').value = document.getElementById('verb-conjunction-rgp-we-n').value

	perfekaty = {
		'I-m':'сам' + ' ' + rgpms['I-m'].value,
		'I-f':'сам' + ' ' + rgpms['I-f'].value,
		'I-n':'сам' + ' ' + rgpms['I-n'].value,
		'Thou-m':'си' + ' ' + rgpms['Thou-m'].value,
		'Thou-f':'си' + ' ' + rgpms['Thou-f'].value,
		'Thou-n':'си' + ' ' + rgpms['Thou-n'].value,
		'HeSheIt-m':'је' + ' ' + rgpms['HeSheIt-m'].value,
		'HeSheIt-f':'је' + ' ' + rgpms['HeSheIt-f'].value,
		'HeSheIt-n':'је' + ' ' + rgpms['HeSheIt-n'].value,

		'We-m':'смо' + ' ' + rgpms['We-m'].value,
		'We-f':'смо' + ' ' + rgpms['We-f'].value,
		'We-n':'смо' + ' ' + rgpms['We-n'].value,
		'You-m':'сте' + ' ' + rgpms['You-m'].value,
		'You-f':'сте' + ' ' + rgpms['You-f'].value,
		'You-n':'сте' + ' ' + rgpms['You-n'].value,
		'They-m':'су' + ' ' + rgpms['They-m'].value,
		'They-f':'су' + ' ' + rgpms['They-f'].value,
		'They-n':'су' + ' ' + rgpms['They-n'].value,
	};

	pluskvamperfekat1y = {
		'I-m':'сам био' + ' ' + rgpms['I-m'].value,
		'I-f':'сам био' + ' ' + rgpms['I-f'].value,
		'I-n':'сам био' + ' ' + rgpms['I-n'].value,
		'Thou-m':'си био' + ' ' + rgpms['Thou-m'].value,
		'Thou-f':'си био' + ' ' + rgpms['Thou-f'].value,
		'Thou-n':'си био' + ' ' + rgpms['Thou-n'].value,
		'HeSheIt-m':'је био' + ' ' + rgpms['HeSheIt-m'].value,
		'HeSheIt-f':'је био' + ' ' + rgpms['HeSheIt-f'].value,
		'HeSheIt-n':'је био' + ' ' + rgpms['HeSheIt-n'].value,

		'We-m':'смо били' + ' ' + rgpms['We-m'].value,
		'We-f':'смо били' + ' ' + rgpms['We-f'].value,
		'We-n':'смо били' + ' ' + rgpms['We-n'].value,
		'You-m':'сте били' + ' ' + rgpms['You-m'].value,
		'You-f':'сте били' + ' ' + rgpms['You-f'].value,
		'You-n':'сте били' + ' ' + rgpms['You-n'].value,
		'They-m':'су били' + ' ' + rgpms['They-m'].value,
		'They-f':'су били' + ' ' + rgpms['They-f'].value,
		'They-n':'су били' + ' ' + rgpms['They-n'].value,
	};

	pluskvamperfekat2y = {
		'I-m':'бејах' + ' ' + rgpms['I-m'].value,
		'I-f':'бејах' + ' ' + rgpms['I-f'].value,
		'I-n':'бејах' + ' ' + rgpms['I-n'].value,
		'Thou-m':'бејаше' + ' ' + rgpms['Thou-m'].value,
		'Thou-f':'бејаше' + ' ' + rgpms['Thou-f'].value,
		'Thou-n':'бејаше' + ' ' + rgpms['Thou-n'].value,
		'HeSheIt-m':'бејаше' + ' ' + rgpms['HeSheIt-m'].value,
		'HeSheIt-f':'бејаше' + ' ' + rgpms['HeSheIt-f'].value,
		'HeSheIt-n':'бејаше' + ' ' + rgpms['HeSheIt-n'].value,

		'We-m':'бејасмо' + ' ' + rgpms['We-m'].value,
		'We-f':'бејасмо' + ' ' + rgpms['We-f'].value,
		'We-n':'бејасмо' + ' ' + rgpms['We-n'].value,
		'You-m':'бејасте' + ' ' + rgpms['You-m'].value,
		'You-f':'бејасте' + ' ' + rgpms['You-f'].value,
		'You-n':'бејасте' + ' ' + rgpms['You-n'].value,
		'They-m':'бејаху' + ' ' + rgpms['They-m'].value,
		'They-f':'бејаху' + ' ' + rgpms['They-f'].value,
		'They-n':'бејаху' + ' ' + rgpms['They-n'].value,
	};

	pluskvamperfekat3y = {
		'I-m':'бех' + ' ' + rgpms['I-m'].value,
		'I-f':'бех' + ' ' + rgpms['I-f'].value,
		'I-n':'бех' + ' ' + rgpms['I-n'].value,
		'Thou-m':'беше' + ' ' + rgpms['Thou-m'].value,
		'Thou-f':'беше' + ' ' + rgpms['Thou-f'].value,
		'Thou-n':'беше' + ' ' + rgpms['Thou-n'].value,
		'HeSheIt-m':'беше' + ' ' + rgpms['HeSheIt-m'].value,
		'HeSheIt-f':'беше' + ' ' + rgpms['HeSheIt-f'].value,
		'HeSheIt-n':'беше' + ' ' + rgpms['HeSheIt-n'].value,

		'We-m':'бесмо' + ' ' + rgpms['We-m'].value,
		'We-f':'бесмо' + ' ' + rgpms['We-f'].value,
		'We-n':'бесмо' + ' ' + rgpms['We-n'].value,
		'You-m':'бесте' + ' ' + rgpms['You-m'].value,
		'You-f':'бесте' + ' ' + rgpms['You-f'].value,
		'You-n':'бесте' + ' ' + rgpms['You-n'].value,
		'They-m':'беху' + ' ' + rgpms['They-m'].value,
		'They-f':'беху' + ' ' + rgpms['They-f'].value,
		'They-n':'беху' + ' ' + rgpms['They-n'].value,
	};

	potencijaly = {
		'I-m':'бих' + ' ' + rgpms['I-m'].value,
		'I-f':'бих' + ' ' + rgpms['I-f'].value,
		'I-n':'бих' + ' ' + rgpms['I-n'].value,
		'Thou-m':'би' + ' ' + rgpms['Thou-m'].value,
		'Thou-f':'би' + ' ' + rgpms['Thou-f'].value,
		'Thou-n':'би' + ' ' + rgpms['Thou-n'].value,
		'HeSheIt-m':'би' + ' ' + rgpms['HeSheIt-m'].value,
		'HeSheIt-f':'би' + ' ' + rgpms['HeSheIt-f'].value,
		'HeSheIt-n':'би' + ' ' + rgpms['HeSheIt-n'].value,

		'We-m':'бисмо' + ' ' + rgpms['We-m'].value,
		'We-f':'бисмо' + ' ' + rgpms['We-f'].value,
		'We-n':'бисмо' + ' ' + rgpms['We-n'].value,
		'You-m':'бисте' + ' ' + rgpms['You-m'].value,
		'You-f':'бисте' + ' ' + rgpms['You-f'].value,
		'You-n':'бисте' + ' ' + rgpms['You-n'].value,
		'They-m':'би' + ' ' + rgpms['They-m'].value,
		'They-f':'би' + ' ' + rgpms['They-f'].value,
		'They-n':'би' + ' ' + rgpms['They-n'].value,
	};

	potencijalprosliy = {
		'I-m':'био бих' + ' ' + rgpms['I-m'].value,
		'I-f':'био бих' + ' ' + rgpms['I-f'].value,
		'I-n':'био бих' + ' ' + rgpms['I-n'].value,
		'Thou-m':'био би' + ' ' + rgpms['Thou-m'].value,
		'Thou-f':'био би' + ' ' + rgpms['Thou-f'].value,
		'Thou-n':'био би' + ' ' + rgpms['Thou-n'].value,
		'HeSheIt-m':'био би' + ' ' + rgpms['HeSheIt-m'].value,
		'HeSheIt-f':'био би' + ' ' + rgpms['HeSheIt-f'].value,
		'HeSheIt-n':'био би' + ' ' + rgpms['HeSheIt-n'].value,

		'We-m':'били бисмо' + ' ' + rgpms['We-m'].value,
		'We-f':'били бисмо' + ' ' + rgpms['We-f'].value,
		'We-n':'били бисмо' + ' ' + rgpms['We-n'].value,
		'You-m':'били бисте' + ' ' + rgpms['You-m'].value,
		'You-f':'били бисте' + ' ' + rgpms['You-f'].value,
		'You-n':'били бисте' + ' ' + rgpms['You-n'].value,
		'They-m':'били би' + ' ' + rgpms['They-m'].value,
		'They-f':'били би' + ' ' + rgpms['They-f'].value,
		'They-n':'били би' + ' ' + rgpms['They-n'].value,
	};

	futur2y = {
		'I-m':'будем' + ' ' + rgpms['I-m'].value,
		'I-f':'будем' + ' ' + rgpms['I-f'].value,
		'I-n':'будем' + ' ' + rgpms['I-n'].value,
		'Thou-m':'будеш' + ' ' + rgpms['Thou-m'].value,
		'Thou-f':'будеш' + ' ' + rgpms['Thou-f'].value,
		'Thou-n':'будеш' + ' ' + rgpms['Thou-n'].value,
		'HeSheIt-m':'буде' + ' ' + rgpms['HeSheIt-m'].value,
		'HeSheIt-f':'буде' + ' ' + rgpms['HeSheIt-f'].value,
		'HeSheIt-n':'буде' + ' ' + rgpms['HeSheIt-n'].value,

		'We-m':'будемо' + ' ' + rgpms['We-m'].value,
		'We-f':'будемо' + ' ' + rgpms['We-f'].value,
		'We-n':'будемо' + ' ' + rgpms['We-n'].value,
		'You-m':'будете' + ' ' + rgpms['You-m'].value,
		'You-f':'будете' + ' ' + rgpms['You-f'].value,
		'You-n':'будете' + ' ' + rgpms['You-n'].value,
		'They-m':'буду' + ' ' + rgpms['They-m'].value,
		'They-f':'буду' + ' ' + rgpms['They-f'].value,
		'They-n':'буду' + ' ' + rgpms['They-n'].value,
	};

	for (var key in perfekaty) {
		perfekat[key].value = perfekaty[key];
		pluskvamperfekat1[key].value = pluskvamperfekat1y[key];
		pluskvamperfekat2[key].value = pluskvamperfekat2y[key];
		pluskvamperfekat3[key].value = pluskvamperfekat3y[key];
		potencijal[key].value = potencijaly[key];
		potencijalprosli[key].value = potencijalprosliy[key];
		futur2[key].value = futur2y[key];
	}
}

function aorist1() {
	osnova = document.getElementById('verb-conjunction-aorist-i').value
	document.getElementById('verb-conjunction-aorist-i').value = osnova + 'х'
	document.getElementById('verb-conjunction-aorist-thou').value = osnova
	document.getElementById('verb-conjunction-aorist-hesheit').value = osnova
	document.getElementById('verb-conjunction-aorist-we').value = osnova + 'смо'
	document.getElementById('verb-conjunction-aorist-you').value = osnova + 'сте'
	document.getElementById('verb-conjunction-aorist-they').value = osnova + 'ше'
}

function aorist2() {
	osnova = document.getElementById('verb-conjunction-aorist-i').value
	document.getElementById('verb-conjunction-aorist-i').value = osnova + 'ох'
	document.getElementById('verb-conjunction-aorist-thou').value = osnova + 'е'
	document.getElementById('verb-conjunction-aorist-hesheit').value = osnova + 'e'
	document.getElementById('verb-conjunction-aorist-we').value = osnova + 'осмо'
	document.getElementById('verb-conjunction-aorist-you').value = osnova + 'осте'
	document.getElementById('verb-conjunction-aorist-they').value = osnova + 'оше'
}

function imperfekat1() {
	osnova = document.getElementById('verb-conjunction-imperfekat1-i').value
	document.getElementById('verb-conjunction-imperfekat1-i').value = osnova + 'ах'
	document.getElementById('verb-conjunction-imperfekat1-thou').value = osnova + 'аше'
	document.getElementById('verb-conjunction-imperfekat1-hesheit').value = osnova + 'аше'
	document.getElementById('verb-conjunction-imperfekat1-we').value = osnova + 'асмо'
	document.getElementById('verb-conjunction-imperfekat1-you').value = osnova + 'асте'
	document.getElementById('verb-conjunction-imperfekat1-they').value = osnova + 'аху'
}

function imperativ1() {
	osnova = document.getElementById('verb-conjunction-imperativ-i').value
	document.getElementById('verb-conjunction-imperativ-i').value = ''
	document.getElementById('verb-conjunction-imperativ-thou').value = osnova + 'и'
	document.getElementById('verb-conjunction-imperativ-hesheit').value = 'нека' + ' ' + osnova + 'и'
	document.getElementById('verb-conjunction-imperativ-we').value = osnova + 'имо'
	document.getElementById('verb-conjunction-imperativ-you').value = osnova + 'ите'
	document.getElementById('verb-conjunction-imperativ-they').value = 'нека' + ' ' + osnova + 'е'
}

function imperativ2() {
	osnova = document.getElementById('verb-conjunction-imperativ-i').value
	document.getElementById('verb-conjunction-imperativ-i').value = ''
	document.getElementById('verb-conjunction-imperativ-thou').value = osnova + 'ј'
	document.getElementById('verb-conjunction-imperativ-hesheit').value = 'нека' + ' ' + osnova
	document.getElementById('verb-conjunction-imperativ-we').value = osnova + 'јмо'
	document.getElementById('verb-conjunction-imperativ-you').value = osnova + 'јте'
	document.getElementById('verb-conjunction-imperativ-they').value = 'нека' + ' ' + osnova + 'ју'
}

function futur11() {
	document.getElementById('verb-conjunction-futur11-i').value = 'ћу да' + ' ' + document.getElementById('verb-conjunction-present-i').value
	document.getElementById('verb-conjunction-futur11-thou').value = 'ћеш да' + ' ' + document.getElementById('verb-conjunction-present-thou').value
	document.getElementById('verb-conjunction-futur11-hesheit').value = 'ће да' + ' ' + document.getElementById('verb-conjunction-present-hesheit').value
	document.getElementById('verb-conjunction-futur11-we').value = 'ћемо да' + ' ' + document.getElementById('verb-conjunction-present-we').value
	document.getElementById('verb-conjunction-futur11-you').value = 'ћете да' + ' ' + document.getElementById('verb-conjunction-present-you').value
	document.getElementById('verb-conjunction-futur11-they').value = 'ће да' + ' ' + document.getElementById('verb-conjunction-present-they').value
}

function futur12() {
	infinitive = document.getElementsByClassName('select2-selection__choice')[0].innerText.substr(1);
	document.getElementById('verb-conjunction-futur12-i').value = 'ћу' + ' ' + infinitive
	document.getElementById('verb-conjunction-futur12-thou').value = 'ћеш' + ' ' + infinitive
	document.getElementById('verb-conjunction-futur12-hesheit').value = 'ће' + ' ' + infinitive
	document.getElementById('verb-conjunction-futur12-we').value = 'ћемо' + ' ' + infinitive
	document.getElementById('verb-conjunction-futur12-you').value = 'ћете' + ' ' + infinitive
	document.getElementById('verb-conjunction-futur12-they').value = 'ће' + ' ' + infinitive
}

function futur13() {
	osnova = document.getElementById('verb-conjunction-futur13-i').value
	document.getElementById('verb-conjunction-futur13-i').value = osnova + 'ћу'
	document.getElementById('verb-conjunction-futur13-thou').value = osnova + 'ћеш'
	document.getElementById('verb-conjunction-futur13-hesheit').value = osnova + 'ће'
	document.getElementById('verb-conjunction-futur13-we').value = osnova + 'ћемо'
	document.getElementById('verb-conjunction-futur13-you').value = osnova + 'ћете'
	document.getElementById('verb-conjunction-futur13-they').value = osnova + 'ће'
}

function gpt() {
	osnova = document.getElementById('verb-conjunction-gpt-m-singular').value
	document.getElementById('verb-conjunction-gpt-m-singular').value = osnova + 'н'
	document.getElementById('verb-conjunction-gpt-f-singular').value = osnova + 'на'
	document.getElementById('verb-conjunction-gpt-n-singular').value = osnova + 'но'
	document.getElementById('verb-conjunction-gpt-m-plural').value = osnova + 'ни'
	document.getElementById('verb-conjunction-gpt-f-plural').value = osnova + 'не'
	document.getElementById('verb-conjunction-gpt-n-plural').value = osnova + 'на'
}
</script>