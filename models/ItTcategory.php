<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "it_tcategory".
 *
 * @property integer $Cate_ID
 * @property string $Cate_Name
 * @property double $TAXPERC
 * @property double $TAXPERC2
 * @property double $TAXPERC3
 * @property integer $ID_RQD
 * @property integer $Age_LMT
 * @property double $TAXPERCCOST
 * @property integer $cate_concess
 * @property integer $Priority
 * @property integer $Batched
 * @property integer $Updated
 */
class ItTcategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'it_tcategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cate_Name'], 'string'],
            [['TAXPERC', 'TAXPERC2', 'TAXPERC3', 'TAXPERCCOST'], 'number'],
            [['ID_RQD', 'Age_LMT', 'cate_concess', 'Priority', 'Batched', 'Updated'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Cate_ID' => Yii::t('app', 'Cate  ID'),
            'Cate_Name' => Yii::t('app', 'Cate  Name'),
            'TAXPERC' => Yii::t('app', 'Taxperc'),
            'TAXPERC2' => Yii::t('app', 'Taxperc2'),
            'TAXPERC3' => Yii::t('app', 'Taxperc3'),
            'ID_RQD' => Yii::t('app', 'Id  Rqd'),
            'Age_LMT' => Yii::t('app', 'Age  Lmt'),
            'TAXPERCCOST' => Yii::t('app', 'Taxperccost'),
            'cate_concess' => Yii::t('app', 'Cate Concess'),
            'Priority' => Yii::t('app', 'Priority'),
            'Batched' => Yii::t('app', 'Batched'),
            'Updated' => Yii::t('app', 'Updated'),
        ];
    }

    /**
     * @inheritdoc
     * @return ItTcategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ItTcategoryQuery(get_called_class());
    }
}
