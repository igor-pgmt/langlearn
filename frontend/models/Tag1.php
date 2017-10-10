<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tag1".
 *
 * @property integer $id
 * @property string $name
 * @property integer $frequency
 */
class Tag1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag1';
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
     * @return Tag1Query the active query used by this AR class.
     */
    public static function find()
    {
        return new Tag1Query(get_called_class());
    }

    public static function getAllTags($combine=false, $allOfUsed=true)
    {
        if ($allOfUsed) {
            $allTags = Tag1::find()->select('name')->distinct()->column();
        } else {
            $allTags = Tag1::find()->where(['>', 'frequency', 0])->select('name')->distinct()->column();
        }

        if ($combine) $allTags = array_combine($allTags, $allTags);

            return $allTags;
    }

}
