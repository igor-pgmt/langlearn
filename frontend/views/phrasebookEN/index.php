<?php

use kartik\depdrop\DepDrop;
use kartik\select2\Select2;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PhrasebookENSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'Phrasebook');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phrasebookEN-index">

    <h1><?=Html::encode($this->title)?></h1>

    <p>
        <?=Html::a(Yii::t('frontend', 'Create Phrase'), ['create'], ['class' => 'btn btn-success'])?>
    </p>


    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
]);?>
<?php

?>
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
        'url' => Url::to(['/phrasebookEN/subcat']),
    ],
]);?>



    <div class="form-group">
        <?=Html::submitButton(Yii::t('frontend', 'Search'), ['class' => 'btn btn-primary'])?>
        <?=Html::a(Yii::t('frontend', 'Reset'), Url::toRoute('phrasebookEN/index'), ['class' => 'btn btn-default'])?>
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
                    $link = 'http://' . $_SERVER['SERVER_NAME'] . '/phrasebookEN?PhrasebookENSearch%5Btopic%5D=' . $data->topic;
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
                    $link = 'http://' . $_SERVER['SERVER_NAME'] . '/phrasebookEN?PhrasebookENSearch%5Bheader%5D=' . $data->header;
                    $itDecoded = '<a href="' . $link . '">' . $data->header . '</a>';
                }

                $it = isset($itDecoded) ? $itDecoded : false;

                return $it;
            },
        ],
        [
            'contentOptions' => ['style' => 'white-space: pre-wrap !important; '],

            'attribute' => 'russian',
            'format' => 'raw',
            'value' => function ($data) {
                if ($data->russian) {

                    $itDecoded = explode(' ', $data->russian);
                    $pattern = '/[,!\.?{}:;]|i/';

                    foreach ($itDecoded as $key => $value) {
                        $value_clean = preg_replace($pattern, '', $value);
                        $link = 'http://' . $_SERVER['SERVER_NAME'] .
                        '/verb-sr?VerbSRSearch%5Binfinitive_sr%5D=' . $value_clean .
                        '&VerbSRSearch%5Binfinitive_ru%5D=' . $value_clean .
                        '&VerbSRSearch%5Binfinitive_en%5D=' . $value_clean .
                        '&VerbSRSearch%5Brelated%5D=' . $value_clean .
                        '&VerbSRSearch%5Bothers%5D=' . $value_clean .
                        '&VerbSRSearch%5Bmeanings%5D=' . $value_clean .
                        '&VerbSRSearch%5Bexamples%5D=' . $value_clean;;
                        $itDecoded[$key] = '<a href="' . $link . '">' . $value . '</a>';
                    }
                }

                $it = isset($itDecoded) ? implode(" ", $itDecoded) : false;

                return $it;
            },
        ],
        [
            'contentOptions' => ['style' => 'white-space: pre-wrap !important;  '],

            'attribute' => 'serbian',
            'format' => 'raw',
            'value' => function ($data) {
                if ($data->serbian) {

                    $itDecoded = explode(' ', $data->serbian);
                    $pattern = '/[,!\.?{}:;]|i/';

                    foreach ($itDecoded as $key => $value) {
                        $value_clean = preg_replace($pattern, '', $value);
                        $link = 'http://' . $_SERVER['SERVER_NAME'] .
                        '/verb-sr?VerbSRSearch%5Binfinitive_sr%5D=' . $value_clean .
                        '&VerbSRSearch%5Binfinitive_ru%5D=' . $value_clean .
                        '&VerbSRSearch%5Binfinitive_en%5D=' . $value_clean .
                        '&VerbSRSearch%5Brelated%5D=' . $value_clean .
                        '&VerbSRSearch%5Bothers%5D=' . $value_clean .
                        '&VerbSRSearch%5Bmeanings%5D=' . $value_clean .
                        '&VerbSRSearch%5Bexamples%5D=' . $value_clean;;
                        $itDecoded[$key] = '<a href="' . $link . '">' . $value . '</a>';
                    }
                }

                $it = isset($itDecoded) ? implode(" ", $itDecoded) : false;

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


<script>


function filter() {

var filter = document.getElementById('phrasebookENsearch-russian').value;
    $.ajax({
        url: '/phrasebookEN/index?PhrasebookENSearch%5Brussian%5D='.filter,
        type: 'POST',
        data: {'filter': filter},
        success: function(res){
           $.pjax.reload({container: '#pfilter'});
        },
        error: function(){
            alert(filter+'Error!');
        }
    });

}

</script>


