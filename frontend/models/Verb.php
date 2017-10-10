<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "verb".
 *
 * @property integer $id
 * @property string $infinitive
 * @property string $conjunction
 * @property string $others
 * @property string $meanings
 * @property string $examples
 * @property integer $related
 * @property integer $rating
 */
class Verb extends \yii\db\ActiveRecord
{
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
            [['infinitive'], 'required'],
            [['infinitive', 'conjunction', 'others', 'meanings', 'examples'], 'string'],
            [['related', 'rating'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('frontend', 'ID'),
            'infinitive' => Yii::t('frontend', 'Infinitive'),
            'conjunction' => Yii::t('frontend', 'Conjunction'),
            'others' => Yii::t('frontend', 'others'),
            'meanings' => Yii::t('frontend', 'Meanings'),
            'examples' => Yii::t('frontend', 'Examples'),
            'related' => Yii::t('frontend', 'Related'),
            'rating' => Yii::t('frontend', 'Rating'),
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
}
