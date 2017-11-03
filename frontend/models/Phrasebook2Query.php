<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Phrasebook2]].
 *
 * @see Phrasebook2
 */
class Phrasebook2Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Phrasebook2[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Phrasebook2|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
