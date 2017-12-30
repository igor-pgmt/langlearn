<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[TagEN]].
 *
 * @see TagEN
 */
class TagENQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     * @return TagEN[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TagEN|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
