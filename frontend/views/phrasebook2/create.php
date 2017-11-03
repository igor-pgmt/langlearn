<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Phrasebook2 */

$this->title = Yii::t('frontend', 'Create Phrase');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Phrasebook'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phrasebook2-create">

    <h1><?=Html::encode($this->title)?></h1>

    <?=$this->render('_form', [
    'model' => $model,
    'phrases' => $phrases,
])?>

</div>
