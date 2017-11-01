<?php

use kartik\depdrop\DepDrop;
use kartik\select2\Select2;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Phrasebook2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'Phrasebook');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phrasebook2-index">

    <h1><?=Html::encode($this->title)?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=Html::a(Yii::t('frontend', 'Create Phrase'), ['create'], ['class' => 'btn btn-success'])?>
    </p>


    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
]);?>

    <?=$form->field($model, 'topic')->widget(Select2::classname(['options' => ['id' => 'cat-id'], 'id' => 'cat-id']), [
    'data' => $phrases['topic'],
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        // 'width' => '550px',
    ],
    'options' => [
        'placeholder' => 'Add ...',
        'id' => 'cat-id',
    ],
]);?>
    <?=$form->field($model, 'header')->widget(DepDrop::classname(), [
    'type' => DepDrop::TYPE_SELECT2,
    'select2Options' => [
        'pluginOptions' => [
            'allowClear' => true,
            'tags' => true,
            // 'width' => '550px',

        ]],
    'options' => ['id' => 'subcat-id'],
    'pluginOptions' => [
        'depends' => ['cat-id'],
        'placeholder' => 'Select...',
        'url' => Url::to(['/phrasebook2/subcat']),
    ],
]);?>



    <div class="form-group">
        <?=Html::submitButton(Yii::t('frontend', 'Search'), ['class' => 'btn btn-primary'])?>
        <?=Html::a(Yii::t('frontend', 'Reset'), Url::toRoute('phrasebook2/index'), ['class' => 'btn btn-default'])?>
    </div>




<?php ActiveForm::end();?>
<?php Pjax::begin(['id' => 'pfilter', 'timeout' => 5000]);?>
<?=GridView::widget([
    'tableOptions' => ['class' => 'clearfix'],
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'filterSelector' => '#filter',
    // 'filterRowOptions' => ['class' => 'kartik-sheet-style'],
    // 'headerRowOptions' => ['class' => 'kartik-sheet-style '],
    // 'bootstrap' => true,
    // 'striped' => true,
    // 'responsive' => true,
    // 'responsiveWrap' => true,
    // 'hover' => true,
    // 'pjax' => true,
    // 'pjaxSettings' => [
    //     'options' => [
    //         'enablePushState' => false,
    //     ],
    // ],
    // 'bordered' => true,
    // 'showPageSummary' => false,
    // 'resizableColumns' => true,
    'columns' => [
        [
            'contentOptions' => ['style' => 'white-space: pre-wrap !important; '],

            'attribute' => 'topic',
            'format' => 'raw',
            'value' => function ($data) {
                if ($data->topic) {

                    $pattern = '/[,!\.?{}:();]|i/';

                    $value_clean = preg_replace($pattern, '', $data->topic);
                    $link = 'http://' . $_SERVER['SERVER_NAME'] . '/phrasebook2?Phrasebook2Search%5Btopic%5D=' . $data->topic;
                    $itDecoded = '<a href="' . $link . '">' . $data->topic . '</a>';
                }

                $it = isset($itDecoded) ? $itDecoded : false;

                return $it;
            },
        ],
        [
            'contentOptions' => ['style' => 'white-space: pre-wrap !important; '],

            'attribute' => 'header',
            'format' => 'raw',
            'value' => function ($data) {
                if ($data->header) {

                    $pattern = '/[,!\.?{}:();]|i/';

                    $value_clean = preg_replace($pattern, '', $data->header);
                    $link = 'http://' . $_SERVER['SERVER_NAME'] . '/phrasebook2?Phrasebook2Search%5Bheader%5D=' . $data->header;
                    $itDecoded = '<a href="' . $link . '">' . $data->header . '</a>';
                }

                $it = isset($itDecoded) ? $itDecoded : false;

                return $it;
            },
        ],
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
                    $pattern = '/[,!\.?{}:;]|i/';

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
                    $pattern = '/[,!\.?{}:;]|i/';

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
        // [
        //     'attribute' => 'english',
        //     'contentOptions' => ['style' => 'white-space: pre-wrap !important; '],

        //     'format' => 'raw',
        //     'value' => function ($data) {
        //         if ($data->english) {

        //             $itDecoded = explode(' ', $data->english);
        //             $pattern = '/[,!\.?{}:;]|i/';

        //             foreach ($itDecoded as $key => $value) {
        //                 $value_clean = preg_replace($pattern, '', $value);
        //                 $link = 'http://' . $_SERVER['SERVER_NAME'] .
        //                 '/verb?VerbSearch%5Binfinitive_sr%5D=' . $value_clean .
        //                 '&VerbSearch%5Binfinitive_ru%5D=' . $value_clean .
        //                 '&VerbSearch%5Binfinitive_en%5D=' . $value_clean .
        //                 '&VerbSearch%5Brelated%5D=' . $value_clean .
        //                 '&VerbSearch%5Bothers%5D=' . $value_clean .
        //                 '&VerbSearch%5Bmeanings%5D=' . $value_clean .
        //                 '&VerbSearch%5Bexamples%5D=' . $value_clean;;
        //                 $itDecoded[$key] = '<a href="' . $link . '">' . $value . '</a>';
        //             }
        //         }

        //         $it = isset($itDecoded) ? implode(" ", $itDecoded) : false;
        //         // return Html::a($it, ['view', 'id' => $data->id]);

        //         return $it;
        //     },
        // ],
        ['attribute' => 'comment',
            'contentOptions' => ['style' => 'white-space: pre-wrap !important;  '],
        ],
        ['class' => 'yii\grid\ActionColumn',
            'contentOptions' => ['style' => 'white-space: nowrap!important; ', 'class' => 'hide-on-mobile'],
        ],
    ],
]);?>
<?php Pjax::end();?></div>


<script>


function filter() {

var filter = document.getElementById('phrasebook2search-russian').value;
    $.ajax({
        // url: '/phrasebook2/index',
        url: '/phrasebook2/index?Phrasebook2Search%5Brussian%5D='.filter,
        type: 'POST',
        data: {'filter': filter},
        success: function(res){
          //alert(res + '=result');
           $.pjax.reload({container: '#pfilter'});
           //return false;

        },
        error: function(){
            alert(filter+'Error!');
        }
    });

}


</script>