<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Testtable */

$this->title = Yii::t('frontend', 'Create Testtable');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Testtables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testtable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
