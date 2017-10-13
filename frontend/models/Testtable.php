<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "testtable".
 *
 * @property integer $id
 * @property string $myfield
 */
class Testtable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testtable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['myfield'], 'required'],
            [['myfield'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('frontend', 'ID'),
            'myfield' => Yii::t('frontend', 'Myfield'),
        ];
    }

    /**
     * @inheritdoc
     * @return TesttableQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TesttableQuery(get_called_class());
    }
}
