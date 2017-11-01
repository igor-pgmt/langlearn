<?php

if (Yii::$app->controller->action->id == 'view') $conjunction = json_decode($conjunction, true);


?>

	<?php if (in_array(Yii::$app->controller->action->id, ['create', 'update']) ) { ?>
<div id="table-container" style="width: 100%; overflow: auto;">
	<table id="table1">
	<thead>
		<tr>
			<td><span></span></td>
			<td>Прошлое</td>
			<td>Настоящее</td>
			<td>Будущее</td>
			<td>Аорист</td>
			<td>Имперфект</td>
			<td>Плусквамперфект</td>
			<td>Футур 1</td>
			<td>Футур 2</td>
			<td>Императив</td>
			<td>Потенциал</td>
		</tr>
	</thead>
	<tbody>
	<tr>
	<td><span>Я</span></td>
	<td><?= $form->field($model, 'conjunction[I][past]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[I][present]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[I][future]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[I][aorist]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[I][imperfekat]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[I][pluskvamperfekat]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[I][futur1]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[I][futur2]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[I][imperative]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[I][potencijal]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	</tr>
	<tr>
	<td><span>Ты</span></td>
	<td><?= $form->field($model, 'conjunction[Thou][past]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[Thou][present]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[Thou][future]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[Thou][aorist]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[Thou][imperfekat]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[Thou][pluskvamperfekat]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[Thou][futur1]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[Thou][futur2]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[Thou][imperative]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[Thou][potencijal]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	</tr>
	<tr>
	<td><span>Он</span></td>
	<td><?= $form->field($model, 'conjunction[HeSheIt][past]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[HeSheIt][present]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[HeSheIt][future]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[HeSheIt][aorist]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[HeSheIt][imperfekat]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[HeSheIt][pluskvamperfekat]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[HeSheIt][futur1]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[HeSheIt][futur2]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[HeSheIt][imperative]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[HeSheIt][potencijal]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	</tr>
</tbody>
</table>
</div>
<div id="table-container" style="width: 100%; overflow: auto;">
	<table id="table2">
	<thead>
		<tr>
			<td><span></span></td>
			<td>Прошлое</td>
			<td>Настоящее</td>
			<td>Будущее</td>
			<td>Аорист</td>
			<td>Имперфект</td>
			<td>Плусквамперфект</td>
			<td>Футур 1</td>
			<td>Футур 2</td>
			<td>Императив</td>
			<td>Потенциал</td>
		</tr>
	</thead>
	<tbody>
	<tr>
	<td><span>Мы</span></td>
	<td><?= $form->field($model, 'conjunction[We][past]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[We][present]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[We][future]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[We][aorist]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[We][imperfekat]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[We][pluskvamperfekat]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[We][futur1]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[We][futur2]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[We][imperative]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[We][potencijal]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	</tr>
	<tr>
	<td><span>Вы</span></td>
	<td><?= $form->field($model, 'conjunction[You][past]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[You][present]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[You][future]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[You][aorist]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[You][imperfekat]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[You][pluskvamperfekat]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[You][futur1]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[You][futur2]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[You][imperative]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[You][potencijal]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	</tr>
	<tr>
	<td><span>Они</span></td>
	<td><?= $form->field($model, 'conjunction[They][past]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[They][present]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[They][future]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[They][aorist]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[They][imperfekat]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[They][pluskvamperfekat]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[They][futur1]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[They][futur2]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[They][imperative]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	<td><?= $form->field($model, 'conjunction[They][potencijal]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
	</tr>
</tbody>
</table>
</div>
<?php } elseif (in_array(Yii::$app->controller->action->id, ['view']) ) { ?>
<div id="table-container" style="width: 100%; overflow: auto;">
	<table id="table1">
	<thead>
		<tr>
			<td><span></span></td>
			<td>Прошлое</td>
			<td>Настоящее</td>
			<td>Будущее</td>
			<td>Аорист</td>
			<td>Имперфект</td>
			<td>Плусквамперфект</td>
			<td>Футур 1</td>
			<td>Футур 2</td>
			<td>Императив</td>
			<td>Потенциал</td>
		</tr>
	</thead>
	<tbody>

	<?php foreach ($conjunction as $pronoun => $times) { ?>
		<?php if (in_array($pronoun, ['I', 'Thou', 'HeSheIt'])) { ?>
			<tr><td><?= $pronoun ?></td>
				<?php foreach ($times as $value) { ?>
					<td><?= $value ?></td>
				<?php } ?>
			</tr>
		<?php } ?>
	<?php } ?>

	</tbody>
</table>
</div>

<div id="table-container" style="width: 100%; overflow: auto;">
	<table id="table2">
	<thead>
		<tr>
			<td><span></span></td>
			<td>Прошлое</td>
			<td>Настоящее</td>
			<td>Будущее</td>
			<td>Аорист</td>
			<td>Имперфект</td>
			<td>Плусквамперфект</td>
			<td>Футур 1</td>
			<td>Футур 2</td>
			<td>Императив</td>
			<td>Потенциал</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($conjunction as $pronoun => $times) { ?>
		<?php if (in_array($pronoun, ['We', 'You', 'They'])) { ?>
			<tr><td><?= $pronoun ?></td>
				<?php foreach ($times as $value) { ?>
					<td><?= $value ?></td>
				<?php } ?>
			</tr>
		<?php } ?>
	<?php } ?>
	</tbody>

</table>
</div>
<?php } ?>






