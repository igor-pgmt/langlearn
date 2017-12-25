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
			<td>Повелительное</td>
			<td>Аорист</td>
			<td>Аорист</td>
			<td>Аорист</td>
			<td>Аорист</td>
			<td>Аорист</td>
			<td>Аорист</td>
			<td>Аорист</td>
		</tr>
	</thead>
	<tbody>
    <tr>
    <td><span>Я</span></td>
    <td><?= $form->field($model, 'conjunction[I][past]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][present]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][future]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][imperative]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][aorist]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?>fff</td>
    </tr>
    <tr>
    <td><span>Ты</span></td>
    <td><?= $form->field($model, 'conjunction[Thou][past]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][present]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][future]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][imperative]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][aorist]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    <tr>
    <td><span>Он</span></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][past]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][present]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][future]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][imperative]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][aorist]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
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
			<td>Повелительное</td>
			<td>Аорист</td>
			<td>Имперфект</td>
			<td>Имперфект</td>
			<td>Имперфект</td>
			<td>Имперфект</td>
		</tr>
	</thead>
	<tbody>
    <tr>
    <td><span>Мы</span></td>
    <td><?= $form->field($model, 'conjunction[We][past]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][present]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][future]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][imperative]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][aorist]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    <tr>
    <td><span>Вы</span></td>
    <td><?= $form->field($model, 'conjunction[You][past]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][present]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][future]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][imperative]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][aorist]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    <tr>
    <td><span>Они</span></td>
    <td><?= $form->field($model, 'conjunction[They][past]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][present]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][future]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][imperative]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][aorist]', ['errorOptions' => ['tag' => null]])->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
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
			<td>Повелительное</td>
			<td>Аорист</td>
			<td>Аорист</td>
			<td>Аорист</td>
			<td>Аорист</td>
			<td>Аорист</td>
			<td>Аорист</td>
			<td>Аорист</td>
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


		<td><?= $conjunction["I"]["past"] ?></td>
		<td><?= $conjunction["I"]["present"] ?></td>
		<td><?= $conjunction["I"]["future"] ?></td>
		<td><?= isset($conjunction["I"]["imperative"]) ? $conjunction["I"]["aorist"] : false ?></td>
		<td><?= isset($conjunction["I"]["aorist"]) ? $conjunction["I"]["aorist"] : false ?></td>
		<td><?= isset($conjunction["I"]["aorist2"]) ? $conjunction["I"]["aorist2"] : false ?></td>
	</tr>
	<tr>
		<td><span>Ты</span></td>
		<td><?= $conjunction["Thou"]["past"] ?></td>
		<td><?= $conjunction["Thou"]["present"] ?></td>
		<td><?= $conjunction["Thou"]["future"] ?></td>
		<td><?= $conjunction["Thou"]["imperative"] ?></td>
		<td><?= $conjunction["Thou"]["aorist"] ?></td>
	</tr>
	<tr>
		<td><span>Он</span></td>
		<td><?= $conjunction["HeSheIt"]["past"] ?></td>
		<td><?= $conjunction["HeSheIt"]["present"] ?></td>
		<td><?= $conjunction["HeSheIt"]["future"] ?></td>
		<td><?= $conjunction["HeSheIt"]["imperative"] ?></td>
		<td><?= $conjunction["HeSheIt"]["aorist"] ?></td>
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
			<td>Повелительное</td>
			<td>Аорист</td>
			<td>Имперфект</td>
			<td>Имперфект</td>
			<td>Имперфект</td>
			<td>Имперфект</td>
		</tr>
	</thead>
	<tr>
		<td><span>Мы</span></td>
		<td><?= $conjunction["We"]["past"] ?></td>
		<td><?= $conjunction["We"]["present"] ?></td>
		<td><?= $conjunction["We"]["future"] ?></td>
		<td><?= $conjunction["We"]["imperative"] ?></td>
		<td><?= $conjunction["We"]["aorist"] ?></td>
	</tr>
	<tr>
		<td><span>Вы</span></td>
		<td><?= $conjunction["You"]["past"] ?></td>
		<td><?= $conjunction["You"]["present"] ?></td>
		<td><?= $conjunction["You"]["future"] ?></td>
		<td><?= $conjunction["You"]["imperative"] ?></td>
		<td><?= $conjunction["You"]["aorist"] ?></td>
	</tr>
	<tr>
		<td><span>Они</span></td>
		<td><?= $conjunction["They"]["past"] ?></td>
		<td><?= $conjunction["They"]["present"] ?></td>
		<td><?= $conjunction["They"]["future"] ?></td>
		<td><?= $conjunction["They"]["imperative"] ?></td>
		<td><?= $conjunction["They"]["aorist"] ?></td>
	</tr>
</tbody>
</table>
</div>
<?php } ?>






