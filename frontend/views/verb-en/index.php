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
    'headerRowOptions' => ['class' => 'kartik-sheet-style', 'style' => 'width: 4%;'],
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
            'attribute' => 'views',
            'contentOptions' => ['style' => 'width:30px; text-align: center;',
            ],
        ],
        [
            'header' => 'Edit',
            'class' => 'kartik\grid\ActionColumn',
            'template' => '{update}',
            'width' => '20px',
            'buttons' => [
                'update' => function ($url, $model) {
                    return Html::a('<div style="width: Auto; min-height: Auto; height: 100%; line-height:40px; margin: -8px;"> <span class="glyphicon glyphicon-pencil"></span></div>', $url, [
                        'title' => Yii::t('yii', 'update'),
                    ]);

                },
            ],

        ],
        [
            'attribute' => 'infinitive_en',
            'format' => 'raw',
            'value' => function ($data) {
                $itDecoded = !empty($data->infinitive_en) ? json_decode($data->infinitive_en) : false;
                $link = 'http://' . $_SERVER['SERVER_NAME'] . '/verb-en/view?id=' . $data->id;
                if ($itDecoded) {
                    foreach ($itDecoded as $key => $value) {
                        switch ($data->reflexive_verb) {
                        case 1:
                            $reflexive = ' (се)';
                            break;
                        case 2:
                            $reflexive = ' се';
                            break;
                        default:
                            $reflexive = false;
                            break;
                        }
                        $itDecoded[$key] = '<a href="' . $link . '">' . $value . $reflexive . '</a>';
                    }
                }

                $it = ($itDecoded) ? implode(", ", $itDecoded) : false;
                return $it;
            },
        ],
        [
            'attribute' => 'infinitive_ru',
            'format' => 'raw',
            'value' => function ($data) {
                $itDecoded = !empty($data->infinitive_ru) ? json_decode($data->infinitive_ru) : false;
                $link = 'http://' . $_SERVER['SERVER_NAME'] . '/phrasebookEN?Phrasebook2Search%5Brussian%5D=';
                if ($itDecoded) {
                    foreach ($itDecoded as $key => $value) {
                        $itDecoded[$key] = $value;
                    }
                }

                $it = ($itDecoded) ? implode(", ", $itDecoded) : false;
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
            'attribute' => 'examples',
            'format' => 'raw',
            'value' => function ($data) {
                $examples = json_decode($data->examples, true);
                $arr = '';
                foreach ($examples as $key => $value) {
                    $arr .= $examples[$key]['example'] . '::' . $examples[$key]['translation'] . '<br/>';
                }

                return $arr;
            },
        ],
    ],
]);?>

<?php Pjax::end();?></div>
