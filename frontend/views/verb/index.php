<?php

use kartik\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VerbSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'Verbs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verb-index">

	<h1><?=Html::encode($this->title)?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?=Html::a(Yii::t('frontend', 'Create Verb'), ['create'], ['class' => 'btn btn-success'])?>
	</p>
<?php Pjax::begin();?>
	<?=GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'filterRowOptions' => ['class' => 'kartik-sheet-style'],
    'headerRowOptions' => ['class' => 'kartik-sheet-style '],
    'bootstrap' => true,
    'striped' => true,
    'responsive' => true,
    'responsiveWrap' => true,
    'resizableColumns' => true,
    'hover' => true,
    'pjax' => true,
    'pjaxSettings' => [
        'options' => [
            'enablePushState' => false,
        ],
    ],
    'bordered' => true,
    'showPageSummary' => false,

    'columns' => [
        ['class' => 'kartik\grid\SerialColumn',
            'contentOptions' => ['style' => 'color: #DDDDDD; width:20px; text-align: center;',
            ],
        ],
        [
            'attribute' => 'rating',
            'contentOptions' => ['style' => 'width:30px; text-align: center;',
            ],
        ],
        [
            'class' => 'kartik\grid\ActionColumn',
            'template' => '{view}',
        ],
        [
            'attribute' => 'infinitive_sr',
            'format' => 'raw',
            'value' => function ($data) {
                $itDecoded = !empty($data->infinitive_sr) ? json_decode($data->infinitive_sr) : false;
                $link = 'http://' . $_SERVER['SERVER_NAME'] . '/phrasebook2?Phrasebook2Search%5Bserbian%5D=';
                if ($itDecoded) {
                    foreach ($itDecoded as $key => $value) {
                        $itDecoded[$key] = '<a href="' . $link . $value . '">' . $value . '</a>';
                    }
                }

                $it = ($itDecoded) ? implode(", ", $itDecoded) : false;
                // return Html::a($it, ['view', 'id' => $data->id]);
                return $it;
            },
        ],
        [
            'attribute' => 'infinitive_ru',
            'format' => 'raw',
            'value' => function ($data) {
                $itDecoded = !empty($data->infinitive_ru) ? json_decode($data->infinitive_ru) : false;
                $link = 'http://' . $_SERVER['SERVER_NAME'] . '/phrasebook2?Phrasebook2Search%5Brussian%5D=';
                if ($itDecoded) {
                    foreach ($itDecoded as $key => $value) {
                        $itDecoded[$key] = '<a href="' . $link . $value . '">' . $value . '</a>';
                    }
                }

                $it = ($itDecoded) ? implode(", ", $itDecoded) : false;
                // return Html::a($it, ['view', 'id' => $data->id]);
                return $it;
            },
        ],
        [
            'attribute' => 'infinitive_en',
            'format' => 'raw',
            'value' => function ($data) {
                $itDecoded = !empty($data->infinitive_en) ? json_decode($data->infinitive_en) : false;
                $link = 'http://' . $_SERVER['SERVER_NAME'] . '/phrasebook2?Phrasebook2Search%5Benglish%5D=';
                if ($itDecoded) {
                    foreach ($itDecoded as $key => $value) {
                        $itDecoded[$key] = '<a href="' . $link . $value . '">' . $value . '</a>';
                    }
                }

                $it = ($itDecoded) ? implode(", ", $itDecoded) : false;
                // return Html::a($it, ['view', 'id' => $data->id]);
                return $it;
            },
        ],
        [
            'attribute' => 'related',
            'format' => 'raw',
            'value' => function ($data) {
                $data->related = json_decode($data->related, true);

                if (!empty($data->related)) {
                    $datar = [];
                    foreach ($data->related as $key => $value) {
                        $data = preg_replace('/[\"\[\]"]/u', '', $value);
                        $datar[] = preg_replace('/,/u', ', ', $data);
                    }
                    return implode(', ', $datar);
                }return '';},
        ],
        [
            'attribute' => 'others',
            'format' => 'raw',
            'value' => function ($data) {
                $others = json_decode($data->others, true);
                $arr = '';
                foreach ($others as $key => $value) {
                    $arr .= $others[$key]['word'] . '::' . $others[$key]['translation'] . '<br/>';
                }

                // $others = implode('\n', $others);
                return $arr;
            },
        ],
        [
            'attribute' => 'meanings',
            'format' => 'raw',
            'value' => function ($data) {
                $meanings = json_decode($data->meanings, true);
                $arr = '';
                foreach ($meanings as $key => $value) {
                    $arr .= $meanings[$key]['meaning'] . '::' . $meanings[$key]['translation'] . '<br/>';
                }

                // $others = implode('\n', $others);
                return $arr;
            },
        ],
        [
            'attribute' => 'examples',
            'format' => 'raw',
            'value' => function ($data) {
                $examples = json_decode($data->examples, true);
                $arr = '';
                foreach ($examples as $key => $value) {
                    $arr .= $examples[$key]['example'] . '::' . $examples[$key]['translation'] . '<br/>';
                }

                // $examples = implode('\n', $examples);
                return $arr;
            },
        ],
    ],
]);?>

<?php Pjax::end();?></div>
