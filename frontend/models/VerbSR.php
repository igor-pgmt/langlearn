<?php

namespace frontend\models;

use creocoder\taggable\TaggableBehavior;
use Yii;

/**
 * This is the model class for table "verbSR".
 *
 * @property integer $id
 * @property string $infinitive_sr
 * @property string $infinitive_ru
 * @property string $infinitive_en
 * @property string $conjunction
 * @property string $others
 * @property string $meanings
 * @property string $examples
 * @property string $examples_ref
 * @property string $comment
 * @property integer $related
 * @property integer $rating
 * @property integer $rating2
 * @property integer $views
 * @property integer $important
 * @property integer $needhelp
 * @property integer $needtranslation
 * @property integer $mainword
 * @property integer $perfect_verb
 * @property integer $reflexive_verb
 */
class VerbSR extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'taggable' => [
                'class' => TaggableBehavior::className(),
                // 'tagValuesAsArray' => false,
                // 'tagRelation' => 'tags',
                // 'tagValueAttribute' => 'name',
                // 'tagFrequencyAttribute' => 'frequency',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'verb_sr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rating', 'views', 'reflexive_verb'], 'integer'],
            [['perfect_verb', 'mainword', 'important', 'needhelp', 'needtranslation'], 'boolean'],
            [['infinitive_sr', 'infinitive_ru', 'infinitive_en', 'conjunction', 'others', 'meanings', 'examples', 'examples_ref', 'comment', 'tagValues', 'related', 'related2'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('frontend', 'ID'),
            'infinitive_ru' => Yii::t('frontend', 'Infinitive RU'),
            'infinitive_sr' => Yii::t('frontend', 'Infinitive SR'),
            'infinitive_en' => Yii::t('frontend', 'Infinitive EN'),
            'conjunction' => Yii::t('frontend', 'Conjunction'),
            'others' => Yii::t('frontend', 'Others'),
            'meanings' => Yii::t('frontend', 'Meanings'),
            'examples' => Yii::t('frontend', 'Examples'),
            'examples_ref' => Yii::t('frontend', 'Reflexive examples'),
            'comment' => Yii::t('frontend', 'Comment'),
            'related' => Yii::t('frontend', 'Related'),
            'rating' => Yii::t('frontend', 'Rating'),
            'views' => Yii::t('frontend', 'Views'),
            'important' => Yii::t('frontend', 'Important'),
            'needhelp' => Yii::t('frontend', 'Need Help'),
            'needtranslation' => Yii::t('frontend', 'Need Transl.'),
            'mainword' => Yii::t('frontend', 'Main word'),
            'perfect_verb' => Yii::t('frontend', 'Perfect verb'),
            'reflexive_verb' => Yii::t('frontend', 'Reflexive verb'),
            'tagValues' => Yii::t('frontend', 'Tags1'),
        ];
    }

    /**
     * @inheritdoc
     * @return VerbSRQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new VerbSRQuery(get_called_class());
    }

    //tagging
    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_ALL,
        ];
    }

    public function getTags()
    {
        return $this->hasMany(TagSR::className(), ['id' => 'tag_sr_id'])
            ->viaTable('{{%verb_sr_tag_sr_assn}}', ['verb_id' => 'id']);
    }

    public static function getInfitranses()
    {
        $rwt = VerbSR::find()
            ->select('infitranslation')
            ->where(['not', ['infitranslation' => '']])
            ->column();
        $t = [];
        foreach ($rwt as $key => $value) {
            $v = json_decode($value);
            if (is_array($v)) {
                foreach ($v as $value2) {
                    array_push($t, $value2);
                }
            } else {array_push($t, $v);}
        }

        return $t;
    }

}
