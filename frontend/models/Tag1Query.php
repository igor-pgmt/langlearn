<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Tag1]].
 *
 * @see Tag1
 */
class Tag1Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Tag1[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Tag1|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
