<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ItTcategory]].
 *
 * @see ItTcategory
 */
class ItTcategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ItTcategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ItTcategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
