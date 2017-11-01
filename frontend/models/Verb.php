<?php

namespace frontend\models;

use creocoder\taggable\TaggableBehavior;
use Yii;

/**
 * This is the model class for table "verb".
 *
 * @property integer $id
 * @property string $infinitive_sr
 * @property string $infinitive_ru
 * @property string $infinitive_en
 * @property string $conjunction
 * @property string $others
 * @property string $meanings
 * @property string $examples
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
 */
class Verb extends \yii\db\ActiveRecord
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
        return 'verb';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rating', 'views'], 'integer'],
            [['perfect_verb', 'mainword', 'important', 'needhelp', 'needtranslation'], 'boolean'],
            [['infinitive_sr', 'infinitive_ru', 'infinitive_en', 'conjunction', 'others', 'meanings', 'examples', 'comment', 'tagValues', 'related', 'related2'], 'safe'],
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
            'comment' => Yii::t('frontend', 'Comment'),
            'related' => Yii::t('frontend', 'Related'),
            'rating' => Yii::t('frontend', 'Rating'),
            'views' => Yii::t('frontend', 'Views'),
            'important' => Yii::t('frontend', 'Important'),
            'needhelp' => Yii::t('frontend', 'Need Help'),
            'needtranslation' => Yii::t('frontend', 'Need Transl.'),
            'mainword' => Yii::t('frontend', 'Main word'),
            'perfect_verb' => Yii::t('frontend', 'Perfect verb'),
            'tagValues' => Yii::t('frontend', 'Tags1'),
        ];
    }

    /**
     * @inheritdoc
     * @return VerbQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new VerbQuery(get_called_class());
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
        return $this->hasMany(Tag1::className(), ['id' => 'tag1_id'])
            ->viaTable('{{%verb_tag1_assn}}', ['verb_id' => 'id']);
    }

    public static function getInfitranses()
    {
        $rwt = Verb::find()
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
