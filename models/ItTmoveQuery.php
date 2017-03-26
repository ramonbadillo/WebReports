<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ItTmove]].
 *
 * @see ItTmove
 */
class ItTmoveQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ItTmove[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ItTmove|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
