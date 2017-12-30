<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[PhrasebookEN]].
 *
 * @see PhrasebookEN
 */
class PhrasebookENQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
    return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return PhrasebookEN[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PhrasebookEN|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
