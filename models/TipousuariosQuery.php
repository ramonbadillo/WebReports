<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Tipousuarios]].
 *
 * @see Tipousuarios
 */
class TipousuariosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Tipousuarios[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Tipousuarios|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
