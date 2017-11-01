<?php

namespace frontend\models;

use Yii;

class Verbser extends \yii\base\Model
{

    public $kind;
    public $word;
    public $translation;

/*

public static function tableName()
{
return 'verb';
}
 */

    public function rules()
    {
        return [
            [['kind', 'word', 'translation'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kind' => Yii::t('frontend', 'Kind'),
            'word' => Yii::t('frontend', 'Word'),
            'translation' => Yii::t('frontend', 'Translation'),

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

}
