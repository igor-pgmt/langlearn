<?php

namespace frontend\models;

use creocoder\taggable\TaggableQueryBehavior;

/**
 * This is the ActiveQuery class for [[VerbSR]].
 *
 * @see VerbSR
 */
class VerbSRQuery extends \yii\db\ActiveQuery
{

    public function behaviors()
    {
        return [
            TaggableQueryBehavior::className(),
        ];
    }

    /*public function active()
    {
    return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return VerbSR[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return VerbSR|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
