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
				<td colspan="4" onclick="rgpf();">Радни глаголски придев</td>
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
				<td rowspan="3">
					<?=$form->field($model, 'conjunction[rgp][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-о'])->label(false)?>
				</td>
				<td rowspan="3">
					<?=$form->field($model, 'conjunction[rgp][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ла'])->label(false)?>
				</td>
				<td rowspan="3">
					<?=$form->field($model, 'conjunction[rgp][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ло'])->label(false)?>
				</td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
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
				<td rowspan="3">
					<?=$form->field($model, 'conjunction[rgp][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ли'])->label(false)?>
				</td>
				<td rowspan="3">
					<?=$form->field($model, 'conjunction[rgp][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ле'])->label(false)?>
				</td>
				<td rowspan="3">
					<?=$form->field($model, 'conjunction[rgp][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ла'])->label(false)?>
				</td>
			</tr>
			<tr>
				<td><span>Ви</span></td>
			</tr>
			<tr>
				<td><span>Они(е,а)</span></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Презент <?=Html::button('Generate→', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'rgpf();', 'style' => 'height: 16px;']);?>b</td>
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
				<td colspan="5">Аорист <?=Html::button('Generate 1 ', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'aorist1();', 'style' => 'height: 16px;']);?><?=Html::button('Generate 2 ', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'aorist2();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-х; -ох'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-смо; -осмо'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-; -е'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-сте; -осте'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-; -е'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ше; -оше'])->label(false)?></td>
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
				<td><?=$form->field($model, 'conjunction[imperfekat1][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ах'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-асмо'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-аше'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-асте'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-аше'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-аху'])->label(false)?></td>
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
				<td><?=$form->field($model, 'conjunction[imperativ][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-имо; -јмо'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-и; -ј'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ите; -јте'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ите; -јте'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ите; -јте'])->label(false)?></td>
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
				<td><?=$form->field($model, 'conjunction[futur11][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћу да ...'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћемо да ...'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћеш да ...'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћете да ...'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ће да ...'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ће да ...'])->label(false)?></td>
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
				<td><?=$form->field($model, 'conjunction[futur12][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћу + инфинитив'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћемо + инфинитив'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћеш + инфинитив'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћете + инфинитив'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ће + инфинитив'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ће + инфинитив'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Футур I (v3) <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'futur131();', 'style' => 'height: 16px;']);?><?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'futur132();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ћу'])->label(false)?></td>
				<td><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ћемо'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ћеш'])->label(false)?></td>
				<td><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ћете'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ће'])->label(false)?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ће'])->label(false)?></td>
			</tr>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Футур II <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'futur222();', 'style' => 'height: 16px;']);?></td>
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
				<td><?=$form->field($model, 'conjunction[gpt][m][singular]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-н'])->label(false)?></td>
				<td><span>Она</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][f][singular]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-на'])->label(false)?></td>
				<td><span>Оно</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][n][singular]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-но'])->label(false)?></td>
			</tr>
			<tr>
				<td><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][m][plural]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ни'])->label(false)?></td>
				<td><span>Оне</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][f][plural]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-не'])->label(false)?></td>
				<td><span>Она</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][n][plural]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-на'])->label(false)?></td>
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
			<?php if (isset($conjunction['rgp']) && !is_null($conjunction['rgp'])) {
        if (!empty(array_filter($conjunction['rgp']))) {?>
			<tr>
				<td><span></span></td>
				<td>мужской род</td>
				<td>женский род</td>
				<td>средний род</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span><b>Ја</b></span></td>
				<td rowspan="3">
					<?=@$conjunction['rgp']['I']['m'] ?: false?>
				</td>
				<td rowspan="3">
					<?=@$conjunction['rgp']['I']['f'] ?: false?>
				</td>
				<td rowspan="3">
					<?=@$conjunction['rgp']['I']['n'] ?: false?>
				</td>
			</tr>
			<tr>
				<td><span><b>Ти</b></span></td>
			</tr>
			<tr>
				<td><span><b>Он(а,о)</b></span></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
	<table>
		<thead>
			<tr>
				<td colspan="4">Радни глаголски придев</td>
			</tr>
						<?php if (isset($conjunction['rgp']) && !is_null($conjunction['rgp'])) {
        if (!empty(array_filter($conjunction['rgp']))) {?>
			<tr>
				<td><span></span></td>
				<td>мужской род</td>
				<td>женский род</td>
				<td>средний род</td>
			</tr>
		</thead>
		<tbody>

			<tr>
				<td><span><b>Ми</b></span></td>
				<td rowspan="3">
					<?=@$conjunction['rgp']['We']['m'] ?: false?>
				</td>
				<td rowspan="3">
					<?=@$conjunction['rgp']['We']['f'] ?: false?>
				</td>
				<td rowspan="3">
					<?=@$conjunction['rgp']['We']['n'] ?: false?>
				</td>
			</tr>
			<tr>
				<td><span><b>Ви</b></span></td>
			</tr>
			<tr>
				<td><span><b>Они(е,а)</b></span></td>
			</tr>
			<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Презент</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['present']) && !is_null($conjunction['present'])) {
        if (!empty(array_filter($conjunction['present']))) {?>
			<tr>
				<td><span>Ја</span></td>
				<td><?=@$conjunction['present']['I'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['present']['We'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['present']['Thou'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['present']['You'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['present']['HeSheIt'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['present']['They'] ?: false?></td>
			</tr>
			<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Аорист</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['aorist']) && !is_null($conjunction['aorist'])) {
        if (!empty(array_filter($conjunction['aorist']))) {?>
			<tr>
				<td><span>Ја</span></td>
				<td><?=@$conjunction['aorist']['I'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['aorist']['We'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['aorist']['Thou'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['aorist']['You'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['aorist']['HeSheIt'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['aorist']['They'] ?: false?></td>
			</tr>
			<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Перфекат</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['perfekat']) && !is_null($conjunction['perfekat'])) {
        if (!empty(array_filter($conjunction['perfekat']))) {?>
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
				<td><?=@$conjunction['perfekat']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['I']['n'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['perfekat']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['perfekat']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['Thou']['n'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['perfekat']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['perfekat']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['HeSheIt']['n'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['perfekat']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['They']['n'] ?: false?></td>
			</tr>
			<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Имперфекат</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['imperfekat1']) && !is_null($conjunction['imperfekat1'])) {
        if (!empty(array_filter($conjunction['imperfekat1']))) {?>
			<tr>
				<td><span>Ја</span></td>
				<td><?=@$conjunction['imperfekat1']['I'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['imperfekat1']['We'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['imperfekat1']['Thou'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['imperfekat1']['You'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['imperfekat1']['HeSheIt'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['imperfekat1']['They'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>

<?php if (isset($conjunction['imperfekat2']) && !is_null($conjunction['imperfekat2'])) {
        if (!empty(array_filter($conjunction['imperfekat2']))) {?>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Имперфекат (v2)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=@$conjunction['imperfekat2']['I'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['imperfekat2']['We'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['imperfekat2']['Thou'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['imperfekat2']['You'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['imperfekat2']['HeSheIt'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['imperfekat2']['They'] ?: false?></td>
			</tr>
		</tbody>
	</table>

<?php }
    }?>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v1)</td>
			</tr>
		</thead>
		<tbody>
<?php if (isset($conjunction['pluskvamperfekat1']) && !is_null($conjunction['pluskvamperfekat1'])) {
        if (!empty(array_filter($conjunction['pluskvamperfekat1']))) {?>
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
				<td><?=@$conjunction['pluskvamperfekat1']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['I']['n'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['pluskvamperfekat1']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['pluskvamperfekat1']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['Thou']['n'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['pluskvamperfekat1']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['pluskvamperfekat1']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['HeSheIt']['n'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['pluskvamperfekat1']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['They']['n'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v2)</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['pluskvamperfekat2']) && !is_null($conjunction['pluskvamperfekat2'])) {
        if (!empty(array_filter($conjunction['pluskvamperfekat2']))) {?>
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
				<td><?=@$conjunction['pluskvamperfekat2']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['I']['n'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['pluskvamperfekat2']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['pluskvamperfekat2']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['Thou']['n'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['pluskvamperfekat2']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['pluskvamperfekat2']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['HeSheIt']['n'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['pluskvamperfekat2']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['They']['n'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v3)</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['pluskvamperfekat3']) && !is_null($conjunction['pluskvamperfekat3'])) {
        if (!empty(array_filter($conjunction['pluskvamperfekat3']))) {?>
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
				<td><?=@$conjunction['pluskvamperfekat3']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['I']['n'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['pluskvamperfekat3']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['pluskvamperfekat3']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['Thou']['n'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['pluskvamperfekat3']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['pluskvamperfekat3']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['HeSheIt']['n'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['pluskvamperfekat3']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['They']['n'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Потенцијал</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['potencijal']) && !is_null($conjunction['potencijal'])) {
        if (!empty(array_filter($conjunction['potencijal']))) {?>
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
				<td><?=@$conjunction['potencijal']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['I']['n'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['potencijal']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['potencijal']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['Thou']['n'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['potencijal']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['potencijal']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['HeSheIt']['n'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['potencijal']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['They']['n'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Императив</td>
			</tr>
		</thead>
			<?php if (isset($conjunction['imperativ']) && !is_null($conjunction['imperativ'])) {
        if (!empty(array_filter($conjunction['imperativ']))) {?>
		<tbody>
			<tr>
				<td><span>Ја</span></td>
				<td><?=@$conjunction['imperativ']['I'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['imperativ']['We'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['imperativ']['Thou'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['imperativ']['You'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['imperativ']['HeSheIt'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['imperativ']['They'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Футур I (v1)</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['futur11']) && !is_null($conjunction['futur11'])) {
        if (!empty(array_filter($conjunction['futur11']))) {?>
			<tr>
				<td><span>Ја</span></td>
				<td><?=@$conjunction['futur11']['I'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['futur11']['We'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['futur11']['Thou'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['futur11']['You'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['futur11']['HeSheIt'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['futur11']['They'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Футур I (v2)</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['futur12']) && !is_null($conjunction['futur12'])) {
        if (!empty(array_filter($conjunction['futur12']))) {?>
			<tr>
				<td><span>Ја</span></td>
				<td><?=@$conjunction['futur12']['I'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['futur12']['We'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['futur12']['Thou'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['futur12']['You'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['futur12']['HeSheIt'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['futur12']['They'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="5">Футур I (v3)</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['futur13']) && !is_null($conjunction['futur13'])) {
        if (!empty(array_filter($conjunction['futur13']))) {?>
			<tr>
				<td><span>Ја</span></td>
				<td><?=@$conjunction['futur13']['I'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['futur13']['We'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['futur13']['Thou'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['futur13']['You'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['futur13']['HeSheIt'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['futur13']['They'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="8">Футур II</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['futur2']) && !is_null($conjunction['futur2'])) {
        if (!empty(array_filter($conjunction['futur2']))) {?>
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
				<td><?=@$conjunction['futur2']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['futur2']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['futur2']['I']['n'] ?: false?></td>
				<td><span>Ми</span></td>
				<td><?=@$conjunction['futur2']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['futur2']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['futur2']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Ти</span></td>
				<td><?=@$conjunction['futur2']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['futur2']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['futur2']['Thou']['n'] ?: false?></td>
				<td><span>Ви</span></td>
				<td><?=@$conjunction['futur2']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['futur2']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['futur2']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Он(а,о)</span></td>
				<td><?=@$conjunction['futur2']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['futur2']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['futur2']['HeSheIt']['n'] ?: false?></td>
				<td><span>Они(е,а)</span></td>
				<td><?=@$conjunction['futur2']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['futur2']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['futur2']['They']['n'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>

	<table id="table1">
		<thead>
			<tr>
				<td colspan="6">Глаголски придев трпни</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['gpt']) && !is_null($conjunction['gpt'])) {
        if (!empty(array_filter($conjunction['gpt']))) {?>
			<tr>
				<td><span>Он</span></td>
				<td><?=@$conjunction['gpt']['m']['singular'] ?: false?></td>
				<td><span>Она</span></td>
				<td><?=@$conjunction['gpt']['f']['singular'] ?: false?></td>
				<td><span>Оно</span></td>
				<td><?=@$conjunction['gpt']['n']['singular'] ?: false?></td>
			</tr>
			<tr>
				<td><span>Они</span></td>
				<td><?=@$conjunction['gpt']['m']['plural'] ?: false?></td>c
				<td><span>Оне</span></td>
				<td><?=@$conjunction['gpt']['f']['plural'] ?: false?></td>
				<td><span>Она</span></td>
				<td><?=@$conjunction['gpt']['n']['plural'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>






















<div id="table-container" style="width: 100%; overflow: auto;">

</div>
<?php }?>


<script>
$(document).ready(function() {
	rgpms = {
		'I-m':document.getElementById('verbsr-conjunction-rgp-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-rgp-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-rgp-i-n'),

		'We-m':document.getElementById('verbsr-conjunction-rgp-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-rgp-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-rgp-we-n'),
	}

	perfekat = {
		'I-m':document.getElementById('verbsr-conjunction-perfekat-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-perfekat-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-perfekat-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-perfekat-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-perfekat-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-perfekat-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-perfekat-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-perfekat-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-perfekat-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-perfekat-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-perfekat-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-perfekat-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-perfekat-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-perfekat-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-perfekat-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-perfekat-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-perfekat-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-perfekat-they-n'),
	}

	pluskvamperfekat1 = {
		'I-m':document.getElementById('verbsr-conjunction-pluskvamperfekat1-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-pluskvamperfekat1-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-pluskvamperfekat1-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-pluskvamperfekat1-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-pluskvamperfekat1-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-pluskvamperfekat1-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-pluskvamperfekat1-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-pluskvamperfekat1-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-pluskvamperfekat1-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-pluskvamperfekat1-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-pluskvamperfekat1-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-pluskvamperfekat1-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-pluskvamperfekat1-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-pluskvamperfekat1-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-pluskvamperfekat1-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-pluskvamperfekat1-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-pluskvamperfekat1-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-pluskvamperfekat1-they-n'),
	}

	pluskvamperfekat2 = {
		'I-m':document.getElementById('verbsr-conjunction-pluskvamperfekat2-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-pluskvamperfekat2-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-pluskvamperfekat2-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-pluskvamperfekat2-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-pluskvamperfekat2-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-pluskvamperfekat2-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-pluskvamperfekat2-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-pluskvamperfekat2-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-pluskvamperfekat2-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-pluskvamperfekat2-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-pluskvamperfekat2-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-pluskvamperfekat2-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-pluskvamperfekat2-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-pluskvamperfekat2-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-pluskvamperfekat2-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-pluskvamperfekat2-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-pluskvamperfekat2-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-pluskvamperfekat2-they-n'),
	}

	pluskvamperfekat3 = {
		'I-m':document.getElementById('verbsr-conjunction-pluskvamperfekat3-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-pluskvamperfekat3-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-pluskvamperfekat3-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-pluskvamperfekat3-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-pluskvamperfekat3-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-pluskvamperfekat3-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-pluskvamperfekat3-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-pluskvamperfekat3-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-pluskvamperfekat3-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-pluskvamperfekat3-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-pluskvamperfekat3-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-pluskvamperfekat3-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-pluskvamperfekat3-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-pluskvamperfekat3-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-pluskvamperfekat3-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-pluskvamperfekat3-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-pluskvamperfekat3-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-pluskvamperfekat3-they-n'),
	}

	potencijal = {
		'I-m':document.getElementById('verbsr-conjunction-potencijal-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-potencijal-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-potencijal-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-potencijal-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-potencijal-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-potencijal-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-potencijal-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-potencijal-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-potencijal-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-potencijal-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-potencijal-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-potencijal-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-potencijal-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-potencijal-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-potencijal-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-potencijal-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-potencijal-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-potencijal-they-n'),
	}

	potencijalprosli = {
		'I-m':document.getElementById('verbsr-conjunction-potencijalprosli-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-potencijalprosli-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-potencijalprosli-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-potencijalprosli-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-potencijalprosli-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-potencijalprosli-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-potencijalprosli-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-potencijalprosli-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-potencijalprosli-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-potencijalprosli-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-potencijalprosli-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-potencijalprosli-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-potencijalprosli-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-potencijalprosli-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-potencijalprosli-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-potencijalprosli-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-potencijalprosli-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-potencijalprosli-they-n'),
	}

	futur2 = {
		'I-m':document.getElementById('verbsr-conjunction-futur2-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-futur2-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-futur2-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-futur2-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-futur2-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-futur2-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-futur2-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-futur2-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-futur2-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-futur2-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-futur2-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-futur2-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-futur2-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-futur2-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-futur2-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-futur2-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-futur2-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-futur2-they-n'),
	}

	aorist = {
		'I-m':document.getElementById('verbsr-conjunction-futur2-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-futur2-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-futur2-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-futur2-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-futur2-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-futur2-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-futur2-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-futur2-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-futur2-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-futur2-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-futur2-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-futur2-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-futur2-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-futur2-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-futur2-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-futur2-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-futur2-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-futur2-they-n'),
	}


})

function rgpf() {

	perfekaty = {
		'I-m':'сам' + ' ' + rgpms['I-m'].value,
		'I-f':'сам' + ' ' + rgpms['I-f'].value,
		'I-n':'сам' + ' ' + rgpms['I-n'].value,
		'Thou-m':'си' + ' ' + rgpms['I-m'].value,
		'Thou-f':'си' + ' ' + rgpms['I-f'].value,
		'Thou-n':'си' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'је' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'је' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'је' + ' ' + rgpms['I-n'].value,

		'We-m':'смо' + ' ' + rgpms['We-m'].value,
		'We-f':'смо' + ' ' + rgpms['We-f'].value,
		'We-n':'смо' + ' ' + rgpms['We-n'].value,
		'You-m':'сте' + ' ' + rgpms['We-m'].value,
		'You-f':'сте' + ' ' + rgpms['We-f'].value,
		'You-n':'сте' + ' ' + rgpms['We-n'].value,
		'They-m':'су' + ' ' + rgpms['We-m'].value,
		'They-f':'су' + ' ' + rgpms['We-f'].value,
		'They-n':'су' + ' ' + rgpms['We-n'].value,
	};

	pluskvamperfekat1y = {
		'I-m':'сам био' + ' ' + rgpms['I-m'].value,
		'I-f':'сам био' + ' ' + rgpms['I-f'].value,
		'I-n':'сам био' + ' ' + rgpms['I-n'].value,
		'Thou-m':'си био' + ' ' + rgpms['I-m'].value,
		'Thou-f':'си био' + ' ' + rgpms['I-f'].value,
		'Thou-n':'си био' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'је био' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'је био' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'је био' + ' ' + rgpms['I-n'].value,

		'We-m':'смо били' + ' ' + rgpms['We-m'].value,
		'We-f':'смо били' + ' ' + rgpms['We-f'].value,
		'We-n':'смо били' + ' ' + rgpms['We-n'].value,
		'You-m':'сте били' + ' ' + rgpms['We-m'].value,
		'You-f':'сте били' + ' ' + rgpms['We-f'].value,
		'You-n':'сте били' + ' ' + rgpms['We-n'].value,
		'They-m':'су били' + ' ' + rgpms['We-m'].value,
		'They-f':'су били' + ' ' + rgpms['We-f'].value,
		'They-n':'су били' + ' ' + rgpms['We-n'].value,
	};

	pluskvamperfekat2y = {
		'I-m':'бејах' + ' ' + rgpms['I-m'].value,
		'I-f':'бејах' + ' ' + rgpms['I-f'].value,
		'I-n':'бејах' + ' ' + rgpms['I-n'].value,
		'Thou-m':'бејаше' + ' ' + rgpms['I-m'].value,
		'Thou-f':'бејаше' + ' ' + rgpms['I-f'].value,
		'Thou-n':'бејаше' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'бејаше' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'бејаше' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'бејаше' + ' ' + rgpms['I-n'].value,

		'We-m':'бејасмо' + ' ' + rgpms['We-m'].value,
		'We-f':'бејасмо' + ' ' + rgpms['We-f'].value,
		'We-n':'бејасмо' + ' ' + rgpms['We-n'].value,
		'You-m':'бејасте' + ' ' + rgpms['We-m'].value,
		'You-f':'бејасте' + ' ' + rgpms['We-f'].value,
		'You-n':'бејасте' + ' ' + rgpms['We-n'].value,
		'They-m':'бејаху' + ' ' + rgpms['We-m'].value,
		'They-f':'бејаху' + ' ' + rgpms['We-f'].value,
		'They-n':'бејаху' + ' ' + rgpms['We-n'].value,
	};

	pluskvamperfekat3y = {
		'I-m':'бех' + ' ' + rgpms['I-m'].value,
		'I-f':'бех' + ' ' + rgpms['I-f'].value,
		'I-n':'бех' + ' ' + rgpms['I-n'].value,
		'Thou-m':'беше' + ' ' + rgpms['I-m'].value,
		'Thou-f':'беше' + ' ' + rgpms['I-f'].value,
		'Thou-n':'беше' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'беше' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'беше' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'беше' + ' ' + rgpms['I-n'].value,

		'We-m':'бесмо' + ' ' + rgpms['We-m'].value,
		'We-f':'бесмо' + ' ' + rgpms['We-f'].value,
		'We-n':'бесмо' + ' ' + rgpms['We-n'].value,
		'You-m':'бесте' + ' ' + rgpms['We-m'].value,
		'You-f':'бесте' + ' ' + rgpms['We-f'].value,
		'You-n':'бесте' + ' ' + rgpms['We-n'].value,
		'They-m':'беху' + ' ' + rgpms['We-m'].value,
		'They-f':'беху' + ' ' + rgpms['We-f'].value,
		'They-n':'беху' + ' ' + rgpms['We-n'].value,
	};

	potencijaly = {
		'I-m':'бих' + ' ' + rgpms['I-m'].value,
		'I-f':'бих' + ' ' + rgpms['I-f'].value,
		'I-n':'бих' + ' ' + rgpms['I-n'].value,
		'Thou-m':'би' + ' ' + rgpms['I-m'].value,
		'Thou-f':'би' + ' ' + rgpms['I-f'].value,
		'Thou-n':'би' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'би' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'би' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'би' + ' ' + rgpms['I-n'].value,

		'We-m':'бисмо' + ' ' + rgpms['We-m'].value,
		'We-f':'бисмо' + ' ' + rgpms['We-f'].value,
		'We-n':'бисмо' + ' ' + rgpms['We-n'].value,
		'You-m':'бисте' + ' ' + rgpms['We-m'].value,
		'You-f':'бисте' + ' ' + rgpms['We-f'].value,
		'You-n':'бисте' + ' ' + rgpms['We-n'].value,
		'They-m':'би' + ' ' + rgpms['We-m'].value,
		'They-f':'би' + ' ' + rgpms['We-f'].value,
		'They-n':'би' + ' ' + rgpms['We-n'].value,
	};

	potencijalprosliy = {
		'I-m':'био бих' + ' ' + rgpms['I-m'].value,
		'I-f':'био бих' + ' ' + rgpms['I-f'].value,
		'I-n':'био бих' + ' ' + rgpms['I-n'].value,
		'Thou-m':'био би' + ' ' + rgpms['I-m'].value,
		'Thou-f':'био би' + ' ' + rgpms['I-f'].value,
		'Thou-n':'био би' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'био би' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'био би' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'био би' + ' ' + rgpms['I-n'].value,

		'We-m':'били бисмо' + ' ' + rgpms['We-m'].value,
		'We-f':'били бисмо' + ' ' + rgpms['We-f'].value,
		'We-n':'били бисмо' + ' ' + rgpms['We-n'].value,
		'You-m':'били бисте' + ' ' + rgpms['We-m'].value,
		'You-f':'били бисте' + ' ' + rgpms['We-f'].value,
		'You-n':'били бисте' + ' ' + rgpms['We-n'].value,
		'They-m':'били би' + ' ' + rgpms['We-m'].value,
		'They-f':'били би' + ' ' + rgpms['We-f'].value,
		'They-n':'били би' + ' ' + rgpms['We-n'].value,
	};

	futur2y = {
		'I-m':'будем' + ' ' + rgpms['I-m'].value,
		'I-f':'будем' + ' ' + rgpms['I-f'].value,
		'I-n':'будем' + ' ' + rgpms['I-n'].value,
		'Thou-m':'будеш' + ' ' + rgpms['I-m'].value,
		'Thou-f':'будеш' + ' ' + rgpms['I-f'].value,
		'Thou-n':'будеш' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'буде' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'буде' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'буде' + ' ' + rgpms['I-n'].value,

		'We-m':'будемо' + ' ' + rgpms['We-m'].value,
		'We-f':'будемо' + ' ' + rgpms['We-f'].value,
		'We-n':'будемо' + ' ' + rgpms['We-n'].value,
		'You-m':'будете' + ' ' + rgpms['We-m'].value,
		'You-f':'будете' + ' ' + rgpms['We-f'].value,
		'You-n':'будете' + ' ' + rgpms['We-n'].value,
		'They-m':'буду' + ' ' + rgpms['We-m'].value,
		'They-f':'буду' + ' ' + rgpms['We-f'].value,
		'They-n':'буду' + ' ' + rgpms['We-n'].value,
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

	futur11();
	futur12();
	futur222();
}

function aorist1() {
	osnova = document.getElementById('verbsr-conjunction-aorist-i').value
	document.getElementById('verbsr-conjunction-aorist-i').value = osnova + 'х'
	document.getElementById('verbsr-conjunction-aorist-thou').value = osnova
	document.getElementById('verbsr-conjunction-aorist-hesheit').value = osnova
	document.getElementById('verbsr-conjunction-aorist-we').value = osnova + 'смо'
	document.getElementById('verbsr-conjunction-aorist-you').value = osnova + 'сте'
	document.getElementById('verbsr-conjunction-aorist-they').value = osnova + 'ше'
}

function aorist2() {
	osnova = document.getElementById('verbsr-conjunction-aorist-i').value
	document.getElementById('verbsr-conjunction-aorist-i').value = osnova + 'ох'
	document.getElementById('verbsr-conjunction-aorist-thou').value = osnova + 'е'
	document.getElementById('verbsr-conjunction-aorist-hesheit').value = osnova + 'e'
	document.getElementById('verbsr-conjunction-aorist-we').value = osnova + 'осмо'
	document.getElementById('verbsr-conjunction-aorist-you').value = osnova + 'осте'
	document.getElementById('verbsr-conjunction-aorist-they').value = osnova + 'оше'
}

function imperfekat1() {
	osnova = document.getElementById('verbsr-conjunction-imperfekat1-i').value
	document.getElementById('verbsr-conjunction-imperfekat1-i').value = osnova + 'ах'
	document.getElementById('verbsr-conjunction-imperfekat1-thou').value = osnova + 'аше'
	document.getElementById('verbsr-conjunction-imperfekat1-hesheit').value = osnova + 'аше'
	document.getElementById('verbsr-conjunction-imperfekat1-we').value = osnova + 'асмо'
	document.getElementById('verbsr-conjunction-imperfekat1-you').value = osnova + 'асте'
	document.getElementById('verbsr-conjunction-imperfekat1-they').value = osnova + 'аху'
}

function imperativ1() {
	osnova = document.getElementById('verbsr-conjunction-imperativ-i').value
	document.getElementById('verbsr-conjunction-imperativ-i').value = ''
	document.getElementById('verbsr-conjunction-imperativ-thou').value = osnova + 'и'
	document.getElementById('verbsr-conjunction-imperativ-hesheit').value = 'нека' + ' ' + osnova + 'и'
	document.getElementById('verbsr-conjunction-imperativ-we').value = osnova + 'имо'
	document.getElementById('verbsr-conjunction-imperativ-you').value = osnova + 'ите'
	document.getElementById('verbsr-conjunction-imperativ-they').value = 'нека' + ' ' + osnova + 'е'
}

function imperativ2() {
	osnova = document.getElementById('verbsr-conjunction-imperativ-i').value
	document.getElementById('verbsr-conjunction-imperativ-i').value = ''
	document.getElementById('verbsr-conjunction-imperativ-thou').value = osnova + 'ј'
	document.getElementById('verbsr-conjunction-imperativ-hesheit').value = 'нека' + ' ' + osnova
	document.getElementById('verbsr-conjunction-imperativ-we').value = osnova + 'јмо'
	document.getElementById('verbsr-conjunction-imperativ-you').value = osnova + 'јте'
	document.getElementById('verbsr-conjunction-imperativ-they').value = 'нека' + ' ' + osnova + 'ју'
}

function futur11() {
	document.getElementById('verbsr-conjunction-futur11-i').value = 'ћу да' + ' ' + document.getElementById('verbsr-conjunction-present-i').value
	document.getElementById('verbsr-conjunction-futur11-thou').value = 'ћеш да' + ' ' + document.getElementById('verbsr-conjunction-present-thou').value
	document.getElementById('verbsr-conjunction-futur11-hesheit').value = 'ће да' + ' ' + document.getElementById('verbsr-conjunction-present-hesheit').value
	document.getElementById('verbsr-conjunction-futur11-we').value = 'ћемо да' + ' ' + document.getElementById('verbsr-conjunction-present-we').value
	document.getElementById('verbsr-conjunction-futur11-you').value = 'ћете да' + ' ' + document.getElementById('verbsr-conjunction-present-you').value
	document.getElementById('verbsr-conjunction-futur11-they').value = 'ће да' + ' ' + document.getElementById('verbsr-conjunction-present-they').value
}

function futur12() {
	infinitive = document.getElementsByClassName('select2-selection__choice')[0].innerText.substr(1);
	document.getElementById('verbsr-conjunction-futur12-i').value = 'ћу' + ' ' + infinitive
	document.getElementById('verbsr-conjunction-futur12-thou').value = 'ћеш' + ' ' + infinitive
	document.getElementById('verbsr-conjunction-futur12-hesheit').value = 'ће' + ' ' + infinitive
	document.getElementById('verbsr-conjunction-futur12-we').value = 'ћемо' + ' ' + infinitive
	document.getElementById('verbsr-conjunction-futur12-you').value = 'ћете' + ' ' + infinitive
	document.getElementById('verbsr-conjunction-futur12-they').value = 'ће' + ' ' + infinitive
}

function futur131() {
	osnova = document.getElementById('verbsr-conjunction-futur13-i').value
	// infinitive = document.getElementsByClassName('select2-selection__choice')[0].innerText.substr(1);
	document.getElementById('verbsr-conjunction-futur13-i').value = osnova + 'ћу'
	document.getElementById('verbsr-conjunction-futur13-thou').value = osnova + 'ћеш'
	document.getElementById('verbsr-conjunction-futur13-hesheit').value = osnova + 'ће'
	document.getElementById('verbsr-conjunction-futur13-we').value = osnova + 'ћемо'
	document.getElementById('verbsr-conjunction-futur13-you').value = osnova + 'ћете'
	document.getElementById('verbsr-conjunction-futur13-they').value = osnova + 'ће'
}

function futur132() {
	osnova = document.getElementById('verbsr-conjunction-futur13-i').value
	// infinitive = document.getElementsByClassName('select2-selection__choice')[0].innerText.substr(1);
	document.getElementById('verbsr-conjunction-futur13-i').value = osnova + ' ' + 'ћу'
	document.getElementById('verbsr-conjunction-futur13-thou').value = osnova + ' '  + 'ћеш'
	document.getElementById('verbsr-conjunction-futur13-hesheit').value = osnova + ' '  + 'ће'
	document.getElementById('verbsr-conjunction-futur13-we').value = osnova + ' '  + 'ћемо'
	document.getElementById('verbsr-conjunction-futur13-you').value = osnova + ' '  + 'ћете'
	document.getElementById('verbsr-conjunction-futur13-they').value = osnova + ' '  + 'ће'
}

function futur222() {
	document.getElementById('verbsr-conjunction-futur2-i-m').value = 'будем' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-m').value
	document.getElementById('verbsr-conjunction-futur2-i-f').value = 'будем' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-f').value
	document.getElementById('verbsr-conjunction-futur2-i-n').value = 'будем' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-n').value
	document.getElementById('verbsr-conjunction-futur2-thou-m').value = 'будеш' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-m').value
	document.getElementById('verbsr-conjunction-futur2-thou-f').value = 'будеш' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-f').value
	document.getElementById('verbsr-conjunction-futur2-thou-n').value = 'будеш' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-n').value
	document.getElementById('verbsr-conjunction-futur2-hesheit-m').value = 'буде' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-m').value
	document.getElementById('verbsr-conjunction-futur2-hesheit-f').value = 'буде' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-f').value
	document.getElementById('verbsr-conjunction-futur2-hesheit-n').value = 'буде' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-n').value

	document.getElementById('verbsr-conjunction-futur2-we-m').value = 'будемо' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-m').value
	document.getElementById('verbsr-conjunction-futur2-we-f').value = 'будемо' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-m').value
	document.getElementById('verbsr-conjunction-futur2-we-n').value = 'будемо' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-m').value
	document.getElementById('verbsr-conjunction-futur2-you-m').value = 'будете' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-m').value
	document.getElementById('verbsr-conjunction-futur2-you-f').value = 'будете' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-f').value
	document.getElementById('verbsr-conjunction-futur2-you-n').value = 'будете' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-n').value
	document.getElementById('verbsr-conjunction-futur2-they-m').value = 'буду' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-m').value
	document.getElementById('verbsr-conjunction-futur2-they-f').value = 'буду' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-f').value
	document.getElementById('verbsr-conjunction-futur2-they-n').value = 'буду' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-n').value
}

function gpt() {
	osnova = document.getElementById('verbsr-conjunction-gpt-m-singular').value
	document.getElementById('verbsr-conjunction-gpt-m-singular').value = osnova + 'н'
	document.getElementById('verbsr-conjunction-gpt-f-singular').value = osnova + 'на'
	document.getElementById('verbsr-conjunction-gpt-n-singular').value = osnova + 'но'
	document.getElementById('verbsr-conjunction-gpt-m-plural').value = osnova + 'ни'
	document.getElementById('verbsr-conjunction-gpt-f-plural').value = osnova + 'не'
	document.getElementById('verbsr-conjunction-gpt-n-plural').value = osnova + 'на'
}
</script>