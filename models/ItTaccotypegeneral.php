<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "it_taccotypegeneral".
 *
 * @property integer $Gen_account
 * @property string $Gen_Name
 * @property integer $Batched
 * @property integer $Updated
 *
 * @property ItTaccotype[] $itTaccotypes
 */
class ItTaccotypegeneral extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'it_taccotypegeneral';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Gen_Name'], 'string'],
            [['Batched', 'Updated'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Gen_account' => Yii::t('app', 'Gen Account'),
            'Gen_Name' => Yii::t('app', 'Gen  Name'),
            'Batched' => Yii::t('app', 'Batched'),
            'Updated' => Yii::t('app', 'Updated'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItTaccotypes()
    {
        return $this->hasMany(ItTaccotype::className(), ['Acco_GEN_ID' => 'Gen_account']);
    }

    /**
     * @inheritdoc
     * @return ItTaccotypegeneralQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ItTaccotypegeneralQuery(get_called_class());
    }
}
