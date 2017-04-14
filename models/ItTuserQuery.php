<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ItTuser]].
 *
 * @see ItTuser
 */
class ItTuserQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ItTuser[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ItTuser|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
