<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipousuarios".
 *
 * @property string $id
 * @property string $descripcion
 * @property integer $estatusActivo
 *
 * @property Usuarios[] $usuarios
 */
class Tipousuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipousuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'required'],
            [['estatusActivo'], 'integer'],
            [['descripcion'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'estatusActivo' => Yii::t('app', 'Estatus Activo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['idTipoUsuario' => 'id']);
    }

    /**
     * @inheritdoc
     * @return TipousuariosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipousuariosQuery(get_called_class());
    }
}
