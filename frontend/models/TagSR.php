<?php

namespace frontend\models;

use frontend\models\VerbSR;
use Yii;

/**
 * This is the model class for table "tag1".
 *
 * @property integer $id
 * @property string $name
 * @property integer $frequency
 */
class TagSR extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag_sr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['frequency'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('frontend', 'ID'),
            'name' => Yii::t('frontend', 'Name'),
            'frequency' => Yii::t('frontend', 'Frequency'),
        ];
    }

    /**
     * @inheritdoc
     * @return TagSRQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TagSRQuery(get_called_class());
    }

    public static function getAllTags($combine = false, $allOfUsed = true)
    {
        if ($allOfUsed) {
            $allTags = TagSR::find()->select('name')->distinct()->column();
        } else {
            $allTags = TagSR::find()->where(['>', 'frequency', 0])->select('name')->distinct()->column();
        }

        if ($combine) {
            $allTags = array_combine($allTags, $allTags);
        }

        return $allTags;
    }

    public static function getAllVerbs($combine = false, $lang = 'sr')
    {
        $lang = 'infinitive_' . $lang;

        $allTags = VerbSR::find()->select($lang)->where(['mainword' => true])->distinct()->column();

        if ($combine) {
            $allTags = array_combine($allTags, $allTags);
        }

        foreach ($allTags as $key => $value) {
            $allTags[$key] = preg_replace('/[\"\[\]"]/u', '', $value);
            $allTags[$key] = preg_replace('/,/u', ', ', $allTags[$key]);
        }

        return $allTags;
    }

}
