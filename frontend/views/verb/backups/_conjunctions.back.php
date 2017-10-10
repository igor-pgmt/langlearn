<?php

// use yii\helpers\Html;
// use yii\widgets\ActiveForm;

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

    <table id="table1">
    <tr>
    <td><span></span></td>
    <td>Прошлое</td>
    <td>Настоящее</td>
    <td>Будущее</td>
    <td>Повелительное</td>
    <td>Аорист</td>
    </tr>
    <tr>
    <td><span>Я</span></td>
    <td><?= $form->field($model, 'conjunction[I][past]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][present]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][future]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][imperative]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[I][aorist]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    <tr>
    <td><span>Ты</span></td>
    <td><?= $form->field($model, 'conjunction[Thou][past]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][present]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][future]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][imperative]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[Thou][aorist]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    <tr>
    <td><span>Он</span></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][past]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][present]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][future]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][imperative]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[HeSheIt][aorist]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    </table>

    <table id="table2">
    <tr>
    <td><span></span></td>
    <td>Прошлое</td>
    <td>Настоящее</td>
    <td>Будущее</td>
    <td>Повелительное</td>
    <td>Аорист</td>
    </tr>
    <tr>
    <tr>
    <td><span>Мы</span></td>
    <td><?= $form->field($model, 'conjunction[We][past]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][present]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][future]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][imperative]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[We][aorist]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    <tr>
    <td><span>Вы</span></td>
    <td><?= $form->field($model, 'conjunction[You][past]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][present]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][future]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][imperative]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[You][aorist]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    <tr>
    <td><span>Он</span></td>
    <td><?= $form->field($model, 'conjunction[They][past]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][present]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][future]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][imperative]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    <td><?= $form->field($model, 'conjunction[They][aorist]')->textInput(['class' => 'col-xs-12 form-control', 'style' => 'padding: 0px;'])->label(false) ?></td>
    </tr>
    </table>












