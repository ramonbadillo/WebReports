<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "it_taccount".
 *
 * @property integer $Acco_ID
 * @property integer $Acco_Type_ID
 * @property integer $Acco_Acty_ID
 * @property string $Acco_Name
 * @property string $Acco_Desc
 * @property string $Acco_Nro
 * @property string $Acco_Bala
 * @property string $Acco_Date
 * @property integer $Acco_Stat
 * @property string $Acco_Note
 * @property string $account_thirdparty
 * @property integer $Batched
 * @property integer $Updated
 */
class ItTaccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'it_taccount';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Acco_Type_ID', 'Acco_Acty_ID', 'Acco_Stat', 'Batched', 'Updated'], 'integer'],
            [['Acco_Bala'], 'number'],
            [['Acco_Date'], 'safe'],
            [['Acco_Note'], 'string'],
            [['Acco_Name', 'Acco_Desc', 'Acco_Nro', 'account_thirdparty'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Acco_ID' => Yii::t('app', 'Acco  ID'),
            'Acco_Type_ID' => Yii::t('app', 'Acco  Type  ID'),
            'Acco_Acty_ID' => Yii::t('app', 'Acco  Acty  ID'),
            'Acco_Name' => Yii::t('app', 'Acco  Name'),
            'Acco_Desc' => Yii::t('app', 'Acco  Desc'),
            'Acco_Nro' => Yii::t('app', 'Acco  Nro'),
            'Acco_Bala' => Yii::t('app', 'Acco  Bala'),
            'Acco_Date' => Yii::t('app', 'Acco  Date'),
            'Acco_Stat' => Yii::t('app', 'Acco  Stat'),
            'Acco_Note' => Yii::t('app', 'Acco  Note'),
            'account_thirdparty' => Yii::t('app', 'Account Thirdparty'),
            'Batched' => Yii::t('app', 'Batched'),
            'Updated' => Yii::t('app', 'Updated'),
        ];
    }

    /**
     * @inheritdoc
     * @return ItTaccountQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ItTaccountQuery(get_called_class());
    }
}
