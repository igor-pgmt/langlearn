<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[TagSR]].
 *
 * @see TagSR
 */
class TagSRQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     * @return TagSR[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TagSR|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
