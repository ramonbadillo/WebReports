<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "it_tuser".
 *
 * @property integer $USER_ID
 * @property string $USER_Login
 * @property string $USER_Pass
 * @property string $USER_Pass_alt
 * @property string $USER_Date
 * @property string $USER_Expr_Date
 * @property integer $USER_Roll_ID
 * @property integer $USER_Cust_ID
 * @property integer $USER_Loca_ID
 * @property integer $USER_Empl_ID
 * @property string $Regi_Code
 * @property integer $UserON
 * @property integer $EMPL_ID
 * @property integer $grouping_id
 * @property integer $Batched
 * @property integer $Updated
 */
class ItTuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'it_tuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['USER_Login', 'USER_Pass', 'USER_Pass_alt', 'Regi_Code'], 'string'],
            [['USER_Date', 'USER_Expr_Date'], 'safe'],
            [['USER_Roll_ID', 'USER_Cust_ID', 'USER_Loca_ID', 'USER_Empl_ID', 'UserON', 'EMPL_ID', 'grouping_id', 'Batched', 'Updated'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'USER_ID' => Yii::t('app', 'User  ID'),
            'USER_Login' => Yii::t('app', 'User  Login'),
            'USER_Pass' => Yii::t('app', 'User  Pass'),
            'USER_Pass_alt' => Yii::t('app', 'User  Pass Alt'),
            'USER_Date' => Yii::t('app', 'User  Date'),
            'USER_Expr_Date' => Yii::t('app', 'User  Expr  Date'),
            'USER_Roll_ID' => Yii::t('app', 'User  Roll  ID'),
            'USER_Cust_ID' => Yii::t('app', 'User  Cust  ID'),
            'USER_Loca_ID' => Yii::t('app', 'User  Loca  ID'),
            'USER_Empl_ID' => Yii::t('app', 'User  Empl  ID'),
            'Regi_Code' => Yii::t('app', 'Regi  Code'),
            'UserON' => Yii::t('app', 'User On'),
            'EMPL_ID' => Yii::t('app', 'Empl  ID'),
            'grouping_id' => Yii::t('app', 'Grouping ID'),
            'Batched' => Yii::t('app', 'Batched'),
            'Updated' => Yii::t('app', 'Updated'),
        ];
    }

    /**
     * @inheritdoc
     * @return ItTuserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ItTuserQuery(get_called_class());
    }
}
