<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Verb]].
 *
 * @see Verb
 */
class VerbQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Verb[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Verb|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
