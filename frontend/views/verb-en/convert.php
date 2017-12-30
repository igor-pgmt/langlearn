<?php
use frontend\models\VerbEN;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VerbENSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'test');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verb-index">
</div>

<?php

function getArray()
{
    if (isset($arr)) {
        unset($arr);
    }

    $arr = []; /*
    $arr['rgp']['I']['m'] = "";
    $arr['rgp']['I']['f'] = "";
    $arr['rgp']['I']['n'] = "";
    $arr['rgp']['We']['m'] = "";
    $arr['rgp']['We']['f'] = "";
    $arr['rgp']['We']['n'] = "";

    $arr['present']['I'] = "";
    $arr['present']['We'] = "";
    $arr['present']['Thou'] = "";
    $arr['present']['You'] = "";
    $arr['present']['HeSheIt'] = "";
    $arr['present']['They'] = "";

    $arr['aorist']['I'] = "";
    $arr['aorist']['We'] = "";
    $arr['aorist']['Thou'] = "";
    $arr['aorist']['You'] = "";
    $arr['aorist']['HeSheIt'] = "";
    $arr['aorist']['They'] = "";

    $arr['perfekat']['I']['m'] = "";
    $arr['perfekat']['I']['f'] = "";
    $arr['perfekat']['I']['n'] = "";
    $arr['perfekat']['We']['m'] = "";
    $arr['perfekat']['We']['f'] = "";
    $arr['perfekat']['We']['n'] = "";
    $arr['perfekat']['Thou']['m'] = "";
    $arr['perfekat']['Thou']['f'] = "";
    $arr['perfekat']['Thou']['n'] = "";
    $arr['perfekat']['You']['m'] = "";
    $arr['perfekat']['You']['f'] = "";
    $arr['perfekat']['You']['n'] = "";
    $arr['perfekat']['HeSheIt']['m'] = "";
    $arr['perfekat']['HeSheIt']['f'] = "";
    $arr['perfekat']['HeSheIt']['n'] = "";
    $arr['perfekat']['They']['m'] = "";
    $arr['perfekat']['They']['f'] = "";
    $arr['perfekat']['They']['n'] = "";

    $arr['imperfekat1']['I'] = "";
    $arr['imperfekat1']['We'] = "";
    $arr['imperfekat1']['Thou'] = "";
    $arr['imperfekat1']['You'] = "";
    $arr['imperfekat1']['HeSheIt'] = "";
    $arr['imperfekat1']['They'] = "";

    // $arr['imperfekat2']['I'] = "";
    // $arr['imperfekat2']['We'] = "";
    // $arr['imperfekat2']['Thou'] = "";
    // $arr['imperfekat2']['You'] = "";
    // $arr['imperfekat2']['HeSheIt'] = "";
    // $arr['imperfekat2']['They'] = "";

    $arr['pluskvamperfekat1']['I']['m'] = "";
    $arr['pluskvamperfekat1']['I']['f'] = "";
    $arr['pluskvamperfekat1']['I']['n'] = "";
    $arr['pluskvamperfekat1']['We']['m'] = "";
    $arr['pluskvamperfekat1']['We']['f'] = "";
    $arr['pluskvamperfekat1']['We']['n'] = "";
    $arr['pluskvamperfekat1']['Thou']['m'] = "";
    $arr['pluskvamperfekat1']['Thou']['f'] = "";
    $arr['pluskvamperfekat1']['Thou']['n'] = "";
    $arr['pluskvamperfekat1']['You']['m'] = "";
    $arr['pluskvamperfekat1']['You']['f'] = "";
    $arr['pluskvamperfekat1']['You']['n'] = "";
    $arr['pluskvamperfekat1']['HeSheIt']['m'] = "";
    $arr['pluskvamperfekat1']['HeSheIt']['f'] = "";
    $arr['pluskvamperfekat1']['HeSheIt']['n'] = "";
    $arr['pluskvamperfekat1']['They']['m'] = "";
    $arr['pluskvamperfekat1']['They']['f'] = "";
    $arr['pluskvamperfekat1']['They']['n'] = "";

    $arr['pluskvamperfekat2']['I']['m'] = "";
    $arr['pluskvamperfekat2']['I']['f'] = "";
    $arr['pluskvamperfekat2']['I']['n'] = "";
    $arr['pluskvamperfekat2']['We']['m'] = "";
    $arr['pluskvamperfekat2']['We']['f'] = "";
    $arr['pluskvamperfekat2']['We']['n'] = "";
    $arr['pluskvamperfekat2']['Thou']['m'] = "";
    $arr['pluskvamperfekat2']['Thou']['f'] = "";
    $arr['pluskvamperfekat2']['Thou']['n'] = "";
    $arr['pluskvamperfekat2']['You']['m'] = "";
    $arr['pluskvamperfekat2']['You']['f'] = "";
    $arr['pluskvamperfekat2']['You']['n'] = "";
    $arr['pluskvamperfekat2']['HeSheIt']['m'] = "";
    $arr['pluskvamperfekat2']['HeSheIt']['f'] = "";
    $arr['pluskvamperfekat2']['HeSheIt']['n'] = "";
    $arr['pluskvamperfekat2']['They']['m'] = "";
    $arr['pluskvamperfekat2']['They']['f'] = "";
    $arr['pluskvamperfekat2']['They']['n'] = "";

    $arr['pluskvamperfekat3']['I']['m'] = "";
    $arr['pluskvamperfekat3']['I']['f'] = "";
    $arr['pluskvamperfekat3']['I']['n'] = "";
    $arr['pluskvamperfekat3']['We']['m'] = "";
    $arr['pluskvamperfekat3']['We']['f'] = "";
    $arr['pluskvamperfekat3']['We']['n'] = "";
    $arr['pluskvamperfekat3']['Thou']['m'] = "";
    $arr['pluskvamperfekat3']['Thou']['f'] = "";
    $arr['pluskvamperfekat3']['Thou']['n'] = "";
    $arr['pluskvamperfekat3']['You']['m'] = "";
    $arr['pluskvamperfekat3']['You']['f'] = "";
    $arr['pluskvamperfekat3']['You']['n'] = "";
    $arr['pluskvamperfekat3']['HeSheIt']['m'] = "";
    $arr['pluskvamperfekat3']['HeSheIt']['f'] = "";
    $arr['pluskvamperfekat3']['HeSheIt']['n'] = "";
    $arr['pluskvamperfekat3']['They']['m'] = "";
    $arr['pluskvamperfekat3']['They']['f'] = "";
    $arr['pluskvamperfekat3']['They']['n'] = "";

    $arr['potencijal']['I']['m'] = "";
    $arr['potencijal']['I']['f'] = "";
    $arr['potencijal']['I']['n'] = "";
    $arr['potencijal']['We']['m'] = "";
    $arr['potencijal']['We']['f'] = "";
    $arr['potencijal']['We']['n'] = "";
    $arr['potencijal']['Thou']['m'] = "";
    $arr['potencijal']['Thou']['f'] = "";
    $arr['potencijal']['Thou']['n'] = "";
    $arr['potencijal']['You']['m'] = "";
    $arr['potencijal']['You']['f'] = "";
    $arr['potencijal']['You']['n'] = "";
    $arr['potencijal']['HeSheIt']['m'] = "";
    $arr['potencijal']['HeSheIt']['f'] = "";
    $arr['potencijal']['HeSheIt']['n'] = "";
    $arr['potencijal']['They']['m'] = "";
    $arr['potencijal']['They']['f'] = "";
    $arr['potencijal']['They']['n'] = "";

    $arr['potencijalprosli']['I']['m'] = "";
    $arr['potencijalprosli']['I']['f'] = "";
    $arr['potencijalprosli']['I']['n'] = "";
    $arr['potencijalprosli']['We']['m'] = "";
    $arr['potencijalprosli']['We']['f'] = "";
    $arr['potencijalprosli']['We']['n'] = "";
    $arr['potencijalprosli']['Thou']['m'] = "";
    $arr['potencijalprosli']['Thou']['f'] = "";
    $arr['potencijalprosli']['Thou']['n'] = "";
    $arr['potencijalprosli']['You']['m'] = "";
    $arr['potencijalprosli']['You']['f'] = "";
    $arr['potencijalprosli']['You']['n'] = "";
    $arr['potencijalprosli']['HeSheIt']['m'] = "";
    $arr['potencijalprosli']['HeSheIt']['f'] = "";
    $arr['potencijalprosli']['HeSheIt']['n'] = "";
    $arr['potencijalprosli']['They']['m'] = "";
    $arr['potencijalprosli']['They']['f'] = "";
    $arr['potencijalprosli']['They']['n'] = "";

    $arr['imperativ']['I'] = "";
    $arr['imperativ']['We'] = "";
    $arr['imperativ']['Thou'] = "";
    $arr['imperativ']['You'] = "";
    $arr['imperativ']['HeSheIt'] = "";
    $arr['imperativ']['They'] = "";

    $arr['futur11']['I'] = "";
    $arr['futur11']['We'] = "";
    $arr['futur11']['Thou'] = "";
    $arr['futur11']['You'] = "";
    $arr['futur11']['HeSheIt'] = "";
    $arr['futur11']['They'] = "";

    $arr['futur12']['I'] = "";
    $arr['futur12']['We'] = "";
    $arr['futur12']['Thou'] = "";
    $arr['futur12']['You'] = "";
    $arr['futur12']['HeSheIt'] = "";
    $arr['futur12']['They'] = "";

    $arr['futur13']['I'] = "";
    $arr['futur13']['We'] = "";
    $arr['futur13']['Thou'] = "";
    $arr['futur13']['You'] = "";
    $arr['futur13']['HeSheIt'] = "";
    $arr['futur13']['They'] = "";

    $arr['futur2']['I']['m'] = "";
    $arr['futur2']['I']['f'] = "";
    $arr['futur2']['I']['n'] = "";
    $arr['futur2']['We']['m'] = "";
    $arr['futur2']['We']['f'] = "";
    $arr['futur2']['We']['n'] = "";
    $arr['futur2']['Thou']['m'] = "";
    $arr['futur2']['Thou']['f'] = "";
    $arr['futur2']['Thou']['n'] = "";
    $arr['futur2']['You']['m'] = "";
    $arr['futur2']['You']['f'] = "";
    $arr['futur2']['You']['n'] = "";
    $arr['futur2']['HeSheIt']['m'] = "";
    $arr['futur2']['HeSheIt']['f'] = "";
    $arr['futur2']['HeSheIt']['n'] = "";
    $arr['futur2']['They']['m'] = "";
    $arr['futur2']['They']['f'] = "";
    $arr['futur2']['They']['n'] = "";

    $arr['gpt']['m']['singular'] = "";
    $arr['gpt']['m']['plural'] = "";
    $arr['gpt']['f']['singular'] = "";
    $arr['gpt']['f']['plural'] = "";
    $arr['gpt']['n']['singular'] = "";
    $arr['gpt']['n']['plural'] = "";
     */
    return $arr;
}

$models = VerbEN::find()->select('id, conjunction')->asArray()->all();
foreach ($models as $model) {
    $arr = getArray();

    $val = json_decode($model['conjunction']);
    foreach ($val as $key1 => $value1) {
        foreach ($value1 as $key2 => $value2) {
            if (!empty($value2) && isset($value2) && ($key2 !== 'past') && ($key2 !== 'potencijal')) {
                switch ($key2) {
                    case 'imperative':
                        $key2 = 'imperativ';
                        break;
                    case 'imperfekat':
                        $key2 = 'imperfekat1';
                        break;
                    case 'future1':
                        $key2 = 'futur11';
                        break;
                    case 'future1inf':
                        $key2 = 'futur12';
                        break;
                    case 'future1kr':
                        $key2 = 'futur13';
                        break;
                    case 'future2':
                        $key2 = 'futur2';
                        break;
                }

                $arr[$key2][$key1] = $value2;
            }
        }
    }
    echo '<br /><br /><br />';
    $arrsave = json_encode($arr, JSON_UNESCAPED_UNICODE);
    print_r($arrsave);
    $modeltosave = VerbEN::findOne($model['id']);
    $modeltosave->conjunction = $arrsave;
    $modeltosave->save();
}
echo '<br /><br /><br />';
