<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ItTdetamove]].
 *
 * @see ItTdetamove
 */
class ItTdetamoveQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ItTdetamove[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ItTdetamove|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
