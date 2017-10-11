<?php

if (Yii::$app->controller->action->id == 'view') $conjunction = json_decode($conjunction, true);


?>
<style type="text/css">
	.inp_text{
	width:100px;
	}
	#table1, #table2 {
	display:inline-block;
	width:550px;
	overflow:hidden;
	}
	#table1 td,#table2 td {
		width:auto;
	}
</style>
	<?php if (in_array(Yii::$app->controller->action->id, ['create', 'update']) ) { ?>
    <table id="table1">
	<thead>
		<tr>
			<td><span></span></td>
			<td>Прошлое</td>
			<td>Настоящее</td>
			<td>Будущее</td>
			<td>Повелительное</td>
			<td>Аорист</td>
			<td>Имперфект</td>
		</tr>
	</thead>
	<tbody>
    <tr>
    <td><span>Я</span></td>
    <td><?= $form->field($model, 'conjunction[I][past]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][present]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][future]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][imperative]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][aorist]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][imperfekat]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    <tr>
    <td><span>Ты</span></td>
    <td><?= $form->field($model, 'conjunction[Thou][past]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][present]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][future]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][imperative]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][aorist]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][imperfekat]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    <tr>
    <td><span>Он</span></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][past]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][present]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][future]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][imperative]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][aorist]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][imperfekat]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
</tbody>
</table>

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
		</tr>
	</thead>
	<tbody>
    <tr>
    <td><span>Мы</span></td>
    <td><?= $form->field($model, 'conjunction[We][past]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][present]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][future]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][imperative]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][aorist]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][imperfekat]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    <tr>
    <td><span>Вы</span></td>
    <td><?= $form->field($model, 'conjunction[You][past]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][present]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][future]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][imperative]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][aorist]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][imperfekat]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    <tr>
    <td><span>Они</span></td>
    <td><?= $form->field($model, 'conjunction[They][past]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][present]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][future]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][imperative]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][aorist]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][imperfekat]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
</tbody>
</table>
<?php	} ?>
	<table id="table1">
	<thead>
		<tr>
			<td><span></span></td>
			<td>Прошлое</td>
			<td>Настоящее</td>
			<td>Будущее</td>
			<td>Повелительное</td>
			<td>Аорист</td>
			<td>Имперфект</td>
		</tr>
	</thead>
	<tbody>

	<tr>
		<td><span>Я</span></td>

		<td><?= $conjunction["I"]["past"] ?></td>
		<td><?= $conjunction["I"]["present"] ?></td>
		<td><?= $conjunction["I"]["future"] ?></td>
		<td><?= $conjunction["I"]["imperative"] ?></td>
		<td><?= $conjunction["I"]["aorist"] ?></td>
		<td><?= $conjunction["I"]["imperfekat"] ?></td>
	</tr>
	<tr>
		<td><span>Ты</span></td>
		<td><?= $conjunction["Thou"]["past"] ?></td>
		<td><?= $conjunction["Thou"]["present"] ?></td>
		<td><?= $conjunction["Thou"]["future"] ?></td>
		<td><?= $conjunction["Thou"]["imperative"] ?></td>
		<td><?= $conjunction["Thou"]["aorist"] ?></td>
		<td><?= $conjunction["Thou"]["imperfekat"] ?></td>
	</tr>
	<tr>
		<td><span>Он</span></td>
		<td><?= $conjunction["HeSheIt"]["past"] ?></td>
		<td><?= $conjunction["HeSheIt"]["present"] ?></td>
		<td><?= $conjunction["HeSheIt"]["future"] ?></td>
		<td><?= $conjunction["HeSheIt"]["imperative"] ?></td>
		<td><?= $conjunction["HeSheIt"]["aorist"] ?></td>
		<td><?= $conjunction["HeSheIt"]["imperfekat"] ?></td>
	</tr>
</tbody>
</table>

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
		</tr>
	</thead>
	<tr>
		<td><span>Мы</span></td>
		<td><?= $conjunction["We"]["past"] ?></td>
		<td><?= $conjunction["We"]["present"] ?></td>
		<td><?= $conjunction["We"]["future"] ?></td>
		<td><?= $conjunction["We"]["imperative"] ?></td>
		<td><?= $conjunction["We"]["aorist"] ?></td>
		<td><?= $conjunction["We"]["imperfekat"] ?></td>
	</tr>
	<tr>
		<td><span>Вы</span></td>
		<td><?= $conjunction["You"]["past"] ?></td>
		<td><?= $conjunction["You"]["present"] ?></td>
		<td><?= $conjunction["You"]["future"] ?></td>
		<td><?= $conjunction["You"]["imperative"] ?></td>
		<td><?= $conjunction["You"]["aorist"] ?></td>
		<td><?= $conjunction["You"]["imperfekat"] ?></td>
	</tr>
	<tr>
		<td><span>Они</span></td>
		<td><?= $conjunction["They"]["past"] ?></td>
		<td><?= $conjunction["They"]["present"] ?></td>
		<td><?= $conjunction["They"]["future"] ?></td>
		<td><?= $conjunction["They"]["imperative"] ?></td>
		<td><?= $conjunction["They"]["aorist"] ?></td>
		<td><?= $conjunction["They"]["imperfekat"] ?></td>
	</tr>
</tbody>
</table>








