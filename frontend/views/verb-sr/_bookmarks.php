<?php use yii\helpers\Html;?>
<style>
.bookmarks {  /* селектор блока, который будет оставаться на месте */
    position: fixed;
    z-index: 101;
    margin: 120px -130px;
    transform: rotate(-90deg);
}
</style>

<div class="bookmarks">

<?php if (in_array(Yii::$app->controller->action->id, ['create'])) {?>
<?=Html::button('← Пример', ['class' => 'btn btn-default btn-xs vertical-button', 'onclick' => 'downToExamples();']);?>
 <?=Html::submitButton(Yii::t('frontend', 'Create'), ['form' => 'contact-form', 'class' => 'btn btn-success btn-xs vertical-button'])?>

<?php } elseif (in_array(Yii::$app->controller->action->id, ['update'])) {?>
<?=Html::button('← Пример', ['class' => 'btn btn-default btn-xs vertical-button', 'onclick' => 'downToExamples();']);?>
 <?=Html::submitButton(Yii::t('frontend', 'Save'), ['form' => 'contact-form', 'class' => 'btn btn-primary btn-xs vertical-button'])?>

<?php } elseif (in_array(Yii::$app->controller->action->id, ['view'])) {?>
<?=Html::button('← Пример', ['class' => 'btn btn-default btn-xs vertical-button', 'onclick' => 'downToExamples2();']);?>
<?=Html::a(Yii::t('frontend', 'Create Verb'), ['create'], ['class' => 'btn btn-success btn-xs vertical-button'])?>


<?php } elseif (in_array(Yii::$app->controller->action->id, ['index'])) {?>
<?=Html::button('← Вниз', ['class' => 'btn btn-default btn-xs vertical-button', 'onclick' => 'bottomFunction();']);?>
<?=Html::a(Yii::t('frontend', 'Create Verb'), ['create'], ['class' => 'btn btn-success btn-xs vertical-button'])?>
 <?php }?>
<?=Html::button('Вверх →', ['class' => 'btn btn-default btn-xs vertical-button', 'onclick' => 'topFunction();']);?>
<br />
</div>
