<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ItTaccount]].
 *
 * @see ItTaccount
 */
class ItTaccountQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ItTaccount[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ItTaccount|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
