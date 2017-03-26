<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ItTaccotypegeneral]].
 *
 * @see ItTaccotypegeneral
 */
class ItTaccotypegeneralQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ItTaccotypegeneral[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ItTaccotypegeneral|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
