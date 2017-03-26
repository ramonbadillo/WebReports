<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "it_taccotype".
 *
 * @property integer $AcTy_ID
 * @property integer $Acco_GEN_ID
 * @property string $AcTy_Name
 * @property integer $Batched
 * @property integer $Updated
 */
class ItTaccotype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'it_taccotype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Acco_GEN_ID', 'Batched', 'Updated'], 'integer'],
            [['AcTy_Name'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AcTy_ID' => Yii::t('app', 'Ac Ty  ID'),
            'Acco_GEN_ID' => Yii::t('app', 'Acco  Gen  ID'),
            'AcTy_Name' => Yii::t('app', 'Ac Ty  Name'),
            'Batched' => Yii::t('app', 'Batched'),
            'Updated' => Yii::t('app', 'Updated'),
        ];
    }

    /**
     * @inheritdoc
     * @return ItTaccotypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ItTaccotypeQuery(get_called_class());
    }
}
