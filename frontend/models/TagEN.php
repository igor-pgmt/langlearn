<?php

namespace frontend\models;

use frontend\models\VerbEN;
use Yii;

/**
 * This is the model class for table "tag1".
 *
 * @property integer $id
 * @property string $name
 * @property integer $frequency
 */
class TagEN extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag_en';
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
     * @return TagENQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TagENQuery(get_called_class());
    }

    public static function getAllTags($combine = false, $allOfUsed = true)
    {
        if ($allOfUsed) {
            $allTags = TagEN::find()->select('name')->distinct()->column();
        } else {
            $allTags = TagEN::find()->where(['>', 'frequency', 0])->select('name')->distinct()->column();
        }

        if ($combine) {
            $allTags = array_combine($allTags, $allTags);
        }

        return $allTags;
    }

    public static function getAllVerbs($combine = false, $lang = 'en')
    {
        $lang = 'infinitive_' . $lang;

        $allTags = VerbEN::find()->select($lang)->where(['mainword' => true])->distinct()->column();

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
