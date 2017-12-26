<?php
use yii\bootstrap\Button;
use yii\helpers\Html;

if (Yii::$app->controller->action->id == 'view') {
    $conjunction = json_decode($conjunction, true);
}

?>

	<?php if (in_array(Yii::$app->controller->action->id, ['create', 'update'])) {?>
<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="8" onclick="rgpf();">Радни глаголски придев</td>
			</tr>
		</thead>
		<tbody>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td rowspan="3">
					<?=$form->field($model, 'conjunction[rgp][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-о'])->label(false)?>
				</td>
				<td rowspan="3">
					<?=$form->field($model, 'conjunction[rgp][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ла'])->label(false)?>
				</td>
				<td rowspan="3">
					<?=$form->field($model, 'conjunction[rgp][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ло'])->label(false)?>
				</td>
				<td class="face"><span>Ми</span></td>
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
				<td class="face"><span>Ти</span></td>
				<td class="face"><span>Ви</span></td>

			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td class="face"><span>Они(е,а)</span></td>

			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="5">Презент <?=Html::button('Generate→', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'rgpf();', 'style' => 'height: 16px;']);?>b</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[present][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[present][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[present][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[present][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[present][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[present][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="5">Аорист <?=Html::button('Generate 1 ', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'aorist1();', 'style' => 'height: 16px;']);?><?=Html::button('Generate 2 ', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'aorist2();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-х; -ох'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-смо; -осмо'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-; -е'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-сте; -осте'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-; -е'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[aorist][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ше; -оше'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="8">Перфекат</td>
			</tr>
		</thead>
		<tbody>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[perfekat][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[perfekat][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[perfekat][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[perfekat][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[perfekat][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[perfekat][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[perfekat][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="5">Имперфекат <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'imperfekat1();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ах'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-асмо'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-аше'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-асте'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-аше'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat1][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-аху'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="5">Имперфекат (v2)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat2][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat2][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat2][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat2][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat2][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[imperfekat2][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v1)</td>
			</tr>
		</thead>
		<tbody>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat1][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v2)</td>
			</tr>
		</thead>
		<tbody>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat2][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v3)</td>
			</tr>
		</thead>
		<tbody>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[pluskvamperfekat3][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="8">Потенцијал</td>
			</tr>
		</thead>
		<tbody>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[potencijal][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[potencijal][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[potencijal][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[potencijal][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[potencijal][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[potencijal][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijal][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="8">Потенцијал прошли</td>
			</tr>
		</thead>
		<tbody>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[potencijalprosli][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="5">Императив <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'imperativ1();', 'style' => 'height: 16px;']);?><?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'imperativ2();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-имо; -јмо'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-и; -ј'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ите; -јте'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ите; -јте'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[imperativ][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ите; -јте'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="5">Футур I (v1) <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'futur11();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћу да ...'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћемо да ...'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћеш да ...'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћете да ...'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ће да ...'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[futur11][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ће да ...'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="5">Футур I (v2) <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'futur12();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћу + инфинитив'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћемо + инфинитив'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћеш + инфинитив'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ћете + инфинитив'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ће + инфинитив'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[futur12][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => 'ће + инфинитив'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="5">Футур I (v3) <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'futur131();', 'style' => 'height: 16px;']);?><?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'futur132();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][I]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ћу'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][We]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ћемо'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][Thou]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ћеш'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][You]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ћете'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][HeSheIt]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ће'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[futur13][They]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ће'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="8">Футур II <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'futur222();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=$form->field($model, 'conjunction[futur2][I][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][I][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][I][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=$form->field($model, 'conjunction[futur2][We][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][We][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][We][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=$form->field($model, 'conjunction[futur2][Thou][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][Thou][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][Thou][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=$form->field($model, 'conjunction[futur2][You][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][You][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][You][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=$form->field($model, 'conjunction[futur2][HeSheIt][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][HeSheIt][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][HeSheIt][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[futur2][They][m]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][They][f]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
				<td><?=$form->field($model, 'conjunction[futur2][They][n]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>		<thead>
			<tr>
				<td colspan="6">Глаголски придев трпни <?=Html::button('Generate', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'gpt();', 'style' => 'height: 16px;']);?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="face"><span>Он</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][m][singular]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-н'])->label(false)?></td>
				<td class="face"><span>Она</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][f][singular]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-на'])->label(false)?></td>
				<td class="face"><span>Оно</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][n][singular]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-но'])->label(false)?></td>
			</tr>
			<tr>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][m][plural]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-ни'])->label(false)?></td>
				<td class="face"><span>Оне</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][f][plural]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-не'])->label(false)?></td>
				<td class="face"><span>Она</span></td>
				<td><?=$form->field($model, 'conjunction[gpt][n][plural]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;', 'placeholder' => '-на'])->label(false)?></td>
			</tr>
		</tbody>
	</table>
</div>





<?php $this->registerJsFile('@web/js/conjunction.js');?>







<?php } elseif (in_array(Yii::$app->controller->action->id, ['view'])) {
    ?>
	<div class="table1">
		<table>
			<thead>
				<tr>
					<td colspan="5">Презент</td>
				</tr>
			</thead>
			<tbody>
				<?php if (isset($conjunction['present']) && !is_null($conjunction['present'])) {
        if (!empty(array_filter($conjunction['present']))) {?>
				<tr>
					<td class="face"><span>Ја</span></td>
					<td><?=@$conjunction['present']['I'] ?: false?></td>
					<td class="face"><span>Ми</span></td>
					<td><?=@$conjunction['present']['We'] ?: false?></td>
				</tr>
				<tr>
					<td class="face"><span>Ти</span></td>
					<td><?=@$conjunction['present']['Thou'] ?: false?></td>
					<td class="face"><span>Ви</span></td>
					<td><?=@$conjunction['present']['You'] ?: false?></td>
				</tr>
				<tr>
					<td class="face"><span>Он(а,о)</span></td>
					<td><?=@$conjunction['present']['HeSheIt'] ?: false?></td>
					<td class="face"><span>Они(е,а)</span></td>
					<td><?=@$conjunction['present']['They'] ?: false?></td>
				</tr>
				<?php }
    }?>
			</tbody>
		</table>
	</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="5">Аорист</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['aorist']) && !is_null($conjunction['aorist'])) {
        if (!empty(array_filter($conjunction['aorist']))) {?>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['aorist']['I'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['aorist']['We'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['aorist']['Thou'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['aorist']['You'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['aorist']['HeSheIt'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['aorist']['They'] ?: false?></td>
			</tr>
			<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="5">Имперфекат</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['imperfekat1']) && !is_null($conjunction['imperfekat1'])) {
        if (!empty(array_filter($conjunction['imperfekat1']))) {?>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['imperfekat1']['I'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['imperfekat1']['We'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['imperfekat1']['Thou'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['imperfekat1']['You'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['imperfekat1']['HeSheIt'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['imperfekat1']['They'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="8">Перфекат</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['perfekat']) && !is_null($conjunction['perfekat'])) {
        if (!empty(array_filter($conjunction['perfekat']))) {?>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['perfekat']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['I']['n'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['perfekat']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['perfekat']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['Thou']['n'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['perfekat']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['perfekat']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['HeSheIt']['n'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['perfekat']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['perfekat']['They']['n'] ?: false?></td>
			</tr>
			<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="6">Глаголски придев трпни</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['gpt']) && !is_null($conjunction['gpt'])) {
        if (!empty(array_filter($conjunction['gpt']))) {?>
			<tr>
				<td class="face"><span>Он</span></td>
				<td><?=@$conjunction['gpt']['m']['singular'] ?: false?></td>
				<td class="face"><span>Она</span></td>
				<td><?=@$conjunction['gpt']['f']['singular'] ?: false?></td>
				<td class="face"><span>Оно</span></td>
				<td><?=@$conjunction['gpt']['n']['singular'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Они</span></td>
				<td><?=@$conjunction['gpt']['m']['plural'] ?: false?></td>
				<td class="face"><span>Оне</span></td>
				<td><?=@$conjunction['gpt']['f']['plural'] ?: false?></td>
				<td class="face"><span>Она</span></td>
				<td><?=@$conjunction['gpt']['n']['plural'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>

<?php if (isset($conjunction['imperfekat2']) && !is_null($conjunction['imperfekat2'])) {
        if (!empty(array_filter($conjunction['imperfekat2']))) {?>
<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="5">Имперфекат (v2)</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['imperfekat2']['I'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['imperfekat2']['We'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['imperfekat2']['Thou'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['imperfekat2']['You'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['imperfekat2']['HeSheIt'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['imperfekat2']['They'] ?: false?></td>
			</tr>
		</tbody>
	</table>
</div>
<?php }
    }?>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="5">Императив</td>
			</tr>
		</thead>
			<?php if (isset($conjunction['imperativ']) && !is_null($conjunction['imperativ'])) {
        if (!empty(array_filter($conjunction['imperativ']))) {?>
		<tbody>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['imperativ']['I'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['imperativ']['We'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['imperativ']['Thou'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['imperativ']['You'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['imperativ']['HeSheIt'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['imperativ']['They'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="5">Футур I (v1)</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['futur11']) && !is_null($conjunction['futur11'])) {
        if (!empty(array_filter($conjunction['futur11']))) {?>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['futur11']['I'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['futur11']['We'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['futur11']['Thou'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['futur11']['You'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['futur11']['HeSheIt'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['futur11']['They'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="5">Футур I (v2)</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['futur12']) && !is_null($conjunction['futur12'])) {
        if (!empty(array_filter($conjunction['futur12']))) {?>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['futur12']['I'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['futur12']['We'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['futur12']['Thou'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['futur12']['You'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['futur12']['HeSheIt'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['futur12']['They'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="5">Футур I (v3)</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['futur13']) && !is_null($conjunction['futur13'])) {
        if (!empty(array_filter($conjunction['futur13']))) {?>
			<tr>
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['futur13']['I'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['futur13']['We'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['futur13']['Thou'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['futur13']['You'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['futur13']['HeSheIt'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['futur13']['They'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="8">Футур II</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['futur2']) && !is_null($conjunction['futur2'])) {
        if (!empty(array_filter($conjunction['futur2']))) {?>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['futur2']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['futur2']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['futur2']['I']['n'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['futur2']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['futur2']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['futur2']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['futur2']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['futur2']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['futur2']['Thou']['n'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['futur2']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['futur2']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['futur2']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['futur2']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['futur2']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['futur2']['HeSheIt']['n'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['futur2']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['futur2']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['futur2']['They']['n'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="8">Потенцијал</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['potencijal']) && !is_null($conjunction['potencijal'])) {
        if (!empty(array_filter($conjunction['potencijal']))) {?>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['potencijal']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['I']['n'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['potencijal']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['potencijal']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['Thou']['n'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['potencijal']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['potencijal']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['HeSheIt']['n'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['potencijal']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijal']['They']['n'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="8">Потенцијал прошли</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['potencijalprosli']) && !is_null($conjunction['potencijalprosli'])) {
        if (!empty(array_filter($conjunction['potencijalprosli']))) {?>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['potencijalprosli']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijalprosli']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijalprosli']['I']['n'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['potencijalprosli']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijalprosli']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijalprosli']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['potencijalprosli']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijalprosli']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijalprosli']['Thou']['n'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['potencijalprosli']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijalprosli']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijalprosli']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['potencijalprosli']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijalprosli']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijalprosli']['HeSheIt']['n'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['potencijalprosli']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['potencijalprosli']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['potencijalprosli']['They']['n'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v1)</td>
			</tr>
		</thead>
		<tbody>
<?php if (isset($conjunction['pluskvamperfekat1']) && !is_null($conjunction['pluskvamperfekat1'])) {
        if (!empty(array_filter($conjunction['pluskvamperfekat1']))) {?>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['pluskvamperfekat1']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['I']['n'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['pluskvamperfekat1']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['pluskvamperfekat1']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['Thou']['n'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['pluskvamperfekat1']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['pluskvamperfekat1']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['HeSheIt']['n'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['pluskvamperfekat1']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat1']['They']['n'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v2)</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['pluskvamperfekat2']) && !is_null($conjunction['pluskvamperfekat2'])) {
        if (!empty(array_filter($conjunction['pluskvamperfekat2']))) {?>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['pluskvamperfekat2']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['I']['n'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['pluskvamperfekat2']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['pluskvamperfekat2']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['Thou']['n'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['pluskvamperfekat2']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['pluskvamperfekat2']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['HeSheIt']['n'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['pluskvamperfekat2']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat2']['They']['n'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="8">Плусквамперфекат (v3)</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['pluskvamperfekat3']) && !is_null($conjunction['pluskvamperfekat3'])) {
        if (!empty(array_filter($conjunction['pluskvamperfekat3']))) {?>
			<tr class="rod">
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
				<td class="face"><span>Ја</span></td>
				<td><?=@$conjunction['pluskvamperfekat3']['I']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['I']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['I']['n'] ?: false?></td>
				<td class="face"><span>Ми</span></td>
				<td><?=@$conjunction['pluskvamperfekat3']['We']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['We']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['We']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Ти</span></td>
				<td><?=@$conjunction['pluskvamperfekat3']['Thou']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['Thou']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['Thou']['n'] ?: false?></td>
				<td class="face"><span>Ви</span></td>
				<td><?=@$conjunction['pluskvamperfekat3']['You']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['You']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['You']['n'] ?: false?></td>
			</tr>
			<tr>
				<td class="face"><span>Он(а,о)</span></td>
				<td><?=@$conjunction['pluskvamperfekat3']['HeSheIt']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['HeSheIt']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['HeSheIt']['n'] ?: false?></td>
				<td class="face"><span>Они(е,а)</span></td>
				<td><?=@$conjunction['pluskvamperfekat3']['They']['m'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['They']['f'] ?: false?></td>
				<td><?=@$conjunction['pluskvamperfekat3']['They']['n'] ?: false?></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>

<div class="table1">
	<table>
		<thead>
			<tr>
				<td colspan="8">Радни глаголски придев</td>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($conjunction['rgp']) && !is_null($conjunction['rgp'])) {
        if (!empty(array_filter($conjunction['rgp']))) {?>
			<tr class="rod">
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
				<td><span><b>Ти</b></span></td>
				<td><span><b>Ви</b></span></td>
			</tr>
			<tr>
				<td><span><b>Он(а,о)</b></span></td>
				<td><span><b>Они(е,а)</b></span></td>
			</tr>
<?php }
    }?>
		</tbody>
	</table>
</div>



<?php }?>