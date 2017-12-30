<?php use yii\helpers\Html;?>
<style>
.bookmarks {  /* селектор блока, который будет оставаться на месте */
    position: fixed;
    z-index: 101;
    max-width: 20px;
    margin-top: 25px;
    /*margin-right: 120px;*/
    margin-left: -30px;
    /*margin-bottom: 120px;*/
    /*float:left;*/
}
</style>

<div class="bookmarks">
<?=Html::button('Вверх →', ['class' => 'btn btn-default btn-xs vertical-button', 'onclick' => 'topFunction();']);?>

<?php if (in_array(Yii::$app->controller->action->id, ['create'])) {?>
 <?=Html::submitButton(Yii::t('frontend', 'Create'), ['form' => 'contact-form', 'class' => 'btn btn-success btn-xs vertical-button'])?>
<?=Html::button('← Пример', ['class' => 'btn btn-default btn-xs vertical-button', 'onclick' => 'downToExamples();']);?>

<?php } elseif (in_array(Yii::$app->controller->action->id, ['update'])) {?>
<?=Html::submitButton(Yii::t('frontend', 'Save'), ['form' => 'contact-form', 'class' => 'btn btn-primary btn-xs vertical-button'])?>
<?=Html::button('← Пример', ['class' => 'btn btn-default btn-xs vertical-button', 'onclick' => 'downToExamples();']);?>

<?php } elseif (in_array(Yii::$app->controller->action->id, ['view'])) {?>
<?=Html::a(Yii::t('frontend', 'Create Verb'), ['create'], ['class' => 'btn btn-success btn-xs vertical-button'])?>
<?=Html::button('← Пример', ['class' => 'btn btn-default btn-xs vertical-button', 'onclick' => 'downToExamples2();']);?>


<?php } elseif (in_array(Yii::$app->controller->action->id, ['index'])) {?>
<?=Html::a(Yii::t('frontend', 'Create Verb'), ['create'], ['class' => 'btn btn-success btn-xs vertical-button'])?>
<?=Html::button('← Вниз', ['class' => 'btn btn-default btn-xs vertical-button', 'onclick' => 'bottomFunction();']);?>

 <?php }?>
<br />
</div>
