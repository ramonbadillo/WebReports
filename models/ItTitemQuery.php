<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ItTitem]].
 *
 * @see ItTitem
 */
class ItTitemQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ItTitem[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ItTitem|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
