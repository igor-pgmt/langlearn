<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "phrasebookEN".
 *
 * @property integer $id
 * @property string $topic
 * @property string $header
 * @property string $russian
 * @property string $serbian
 * @property string $english
 * @property string $comment
 * @property string $important
 * @property string $needhelp
 */
class PhrasebookEN extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phrasebookEN';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic'], 'required'],
            [['important', 'needhelp', 'word'], 'boolean'],
            [['topic', 'header', 'russian', 'serbian', 'english', 'comment'], 'safe'],
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
            'header' => Yii::t('frontend', 'Header'),
            'russian' => Yii::t('frontend', 'Russian'),
            'serbian' => Yii::t('frontend', 'Serbian'),
            'english' => Yii::t('frontend', 'English'),
            'comment' => Yii::t('frontend', 'Comment'),
            'important' => Yii::t('frontend', 'Important'),
            'needhelp' => Yii::t('frontend', 'Need help'),
        ];
    }

    /**
     * @inheritdoc
     * @return PhrasebookENQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PhrasebookENQuery(get_called_class());
    }
}
