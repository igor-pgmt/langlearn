<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Verb */

$this->title = Yii::t('frontend', 'Create Verb');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Verbs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
