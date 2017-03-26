<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property string $id
 * @property string $loginName
 * @property integer $estatusActivo
 * @property string $idTipoUsuario
 *
 * @property Tipousuarios $idTipoUsuario0
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loginName', 'idTipoUsuario'], 'required'],
            [['estatusActivo', 'idTipoUsuario'], 'integer'],
            [['loginName'], 'string', 'max' => 45],
            [['idTipoUsuario'], 'exist', 'skipOnError' => true, 'targetClass' => Tipousuarios::className(), 'targetAttribute' => ['idTipoUsuario' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'loginName' => Yii::t('app', 'Login Name'),
            'estatusActivo' => Yii::t('app', 'Estatus Activo'),
            'idTipoUsuario' => Yii::t('app', 'Id Tipo Usuario'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoUsuario0()
    {
        return $this->hasOne(Tipousuarios::className(), ['id' => 'idTipoUsuario']);
    }

    /**
     * @inheritdoc
     * @return UsuariosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuariosQuery(get_called_class());
    }
}
