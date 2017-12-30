<?php

use kartik\grid\GridView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$pattern = '/[,!\.?:;]|i/';
$subject = 'Dab(c), das. abcd!';

/*$pgm = preg_replace_callback($pattern, function ($matches) {
foreach ($matches as $key => $value) {
echo 'key→' . $key . 'val=' . $value . 'match[0]' . $matches[0] . '<br />';
}
//return 'x';
}, $subject);*/

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PhrasebookENSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'Phrasebook');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phrasebookEN-index">

    <h1><?=Html::encode($this->title)?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=Html::a(Yii::t('frontend', 'Create Phrase'), ['create'], ['class' => 'btn btn-success'])?>
    </p>


    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
]);?>
  <?=$form->field($model, 'russian', ['options' => ['id' => 'filter', 'onclick' => 'filter();']])?>
  <?=$form->field($model, 'topic')?>
  <?=$form->field($model, 'header')?>



    <div class="form-group">
        <?=Html::submitButton(Yii::t('frontend', 'Search'), ['class' => 'btn btn-primary'])?>
        <?=Html::resetButton(Yii::t('frontend', 'Reset'), ['class' => 'btn btn-default'])?>
    </div>




<?php ActiveForm::end();?>
<?php Pjax::begin(['id' => 'pfilter', 'timeout' => 5000]);?>
<?=GridView::widget([
    'tableOptions' => ['class' => 'clearfix'],
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    // 'filterRowOptions' => ['class' => 'kartik-sheet-style'],
    // 'headerRowOptions' => ['class' => 'kartik-sheet-style '],
    'bootstrap' => true,
    'striped' => true,
    'responsive' => true,
    'responsiveWrap' => true,
    'hover' => true,
    'pjax' => true,
    'pjaxSettings' => [
        'options' => [
            'enablePushState' => false,
        ],
    ],
    'bordered' => true,
    'showPageSummary' => false,
    'resizableColumns' => true,
    'columns' => [
/*        ['class' => 'kartik\grid\SerialColumn',
'contentOptions' => ['style' => 'color: #DDDDDD; width:20px; text-align: center;',
],
],
[
'attribute' => 'topic',
'format' => 'raw',
// 'value' => function ($data) {return json_decode($data->topic);},
],
[
'attribute' => 'header',
'format' => 'raw',
// 'value' => function ($data) {return json_decode($data->header);},
],
 */
        [
            'contentOptions' => ['style' => 'white-space: pre-wrap !important; '],
            'attribute' => 'russian',
            'format' => 'raw',
            'value' => function ($data) {
                if ($data->russian) {

                    // $itDecoded = explode(' ', json_decode($data->russian));
                    $itDecoded = explode(' ', $data->russian);
                    $pattern = '/[,!\.?:;]|i/';

                    foreach ($itDecoded as $key => $value) {
                        $value_clean = preg_replace($pattern, '', $value);
                        $link = 'http://' . $_SERVER['SERVER_NAME'] .
                        '/verb?VerbSearch%5Binfinitive_sr%5D=' . $value_clean .
                        '&VerbSearch%5Binfinitive_ru%5D=' . $value_clean .
                        '&VerbSearch%5Binfinitive_en%5D=' . $value_clean .
                        '&VerbSearch%5Brelated%5D=' . $value_clean .
                        '&VerbSearch%5Bothers%5D=' . $value_clean .
                        '&VerbSearch%5Bmeanings%5D=' . $value_clean .
                        '&VerbSearch%5Bexamples%5D=' . $value_clean;;
                        $itDecoded[$key] = '<a href="' . $link . '">' . $value . '</a>';
                    }
                }

                $it = isset($itDecoded) ? implode(" ", $itDecoded) : false;
                // return Html::a($it, ['view', 'id' => $data->id]);

                return $it;
            },
        ],
        [
            'contentOptions' => ['style' => 'white-space: pre-wrap !important;  '],

            'attribute' => 'serbian',
            'format' => 'raw',
            'value' => function ($data) {
                // $link = 'http://' . $_SERVER['SERVER_NAME'] . '/verb?VerbSearch%5Binfinitive_sr%5D=';
                if ($data->serbian) {

                    // $itDecoded = explode(' ', json_decode($data->serbian));
                    $itDecoded = explode(' ', $data->serbian);
                    $pattern = '/[,!\.?:;]|i/';

                    foreach ($itDecoded as $key => $value) {
                        $value_clean = preg_replace($pattern, '', $value);
                        $link = 'http://' . $_SERVER['SERVER_NAME'] .
                        '/verb?VerbSearch%5Binfinitive_sr%5D=' . $value_clean .
                        '&VerbSearch%5Binfinitive_ru%5D=' . $value_clean .
                        '&VerbSearch%5Binfinitive_en%5D=' . $value_clean .
                        '&VerbSearch%5Brelated%5D=' . $value_clean .
                        '&VerbSearch%5Bothers%5D=' . $value_clean .
                        '&VerbSearch%5Bmeanings%5D=' . $value_clean .
                        '&VerbSearch%5Bexamples%5D=' . $value_clean;;
                        $itDecoded[$key] = '<a href="' . $link . '">' . $value . '</a>';
                    }
                }

                $it = isset($itDecoded) ? implode(" ", $itDecoded) : false;
                // return Html::a($it, ['view', 'id' => $data->id]);

                return $it;
            },
        ],
        [
            'attribute' => 'english',
            'contentOptions' => ['style' => 'white-space: pre-wrap !important; '],

            'format' => 'raw',
            'value' => function ($data) {
                if ($data->english) {

                    $itDecoded = explode(' ', $data->english);
                    $pattern = '/[,!\.?:;]|i/';

                    foreach ($itDecoded as $key => $value) {
                        $value_clean = preg_replace($pattern, '', $value);
                        $link = 'http://' . $_SERVER['SERVER_NAME'] .
                        '/verb?VerbSearch%5Binfinitive_sr%5D=' . $value_clean .
                        '&VerbSearch%5Binfinitive_ru%5D=' . $value_clean .
                        '&VerbSearch%5Binfinitive_en%5D=' . $value_clean .
                        '&VerbSearch%5Brelated%5D=' . $value_clean .
                        '&VerbSearch%5Bothers%5D=' . $value_clean .
                        '&VerbSearch%5Bmeanings%5D=' . $value_clean .
                        '&VerbSearch%5Bexamples%5D=' . $value_clean;;
                        $itDecoded[$key] = '<a href="' . $link . '">' . $value . '</a>';
                    }
                }

                $it = isset($itDecoded) ? implode(" ", $itDecoded) : false;
                // return Html::a($it, ['view', 'id' => $data->id]);

                return $it;
            },
        ],
        ['attribute' => 'comment',
            'contentOptions' => ['style' => 'white-space: pre-wrap !important;  '],
        ],
        ['class' => 'yii\grid\ActionColumn',
            'contentOptions' => ['style' => 'white-space: nowrap!important; ', 'class' => 'hide-on-mobile'],
        ],
    ],
]);?>
<?php Pjax::end();?></div>

