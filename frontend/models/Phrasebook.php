<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "phrasebook".
 *
 * @property integer $id
 * @property string $topic
 * @property string $phrases
 * @property string $language
 */
class Phrasebook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phrasebook';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic', 'phrases', 'language'], 'required'],
           // [['topic', 'language'], 'string'],
          //  [['phrases'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('frontend', 'ID'),
            'topic' => Yii::t('frontend', 'Topic'),
            'phrases' => Yii::t('frontend', 'Phrases'),
            'language' => Yii::t('frontend', 'Language'),
        ];
    }

    /**
     * @inheritdoc
     * @return PhrasebookQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PhrasebookQuery(get_called_class());
    }
}
