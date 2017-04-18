<?php

namespace app\models;

use Yii;

/**
* This is the model class for table "reports_users".
*
* @property integer $id
* @property string $user_name
* @property string $password
* @property integer $status
*/
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
      /**
      * @inheritdoc
      */
      public static function tableName()
      {
            return 'reports_users';
      }
      
      /**
      * @inheritdoc
      */
      public function rules()
      {
            return [
                  [['id', 'user_name', 'password'], 'required'],
                  [['id', 'status'], 'integer'],
                  [['user_name', 'password'], 'string', 'max' => 45],
            ];
      }
      
      /**
      * @inheritdoc
      */
      public function attributeLabels()
      {
            return [
                  'id' => Yii::t('app', 'ID'),
                  'user_name' => Yii::t('app', 'User Name'),
                  'password' => Yii::t('app', 'Password'),
                  'status' => Yii::t('app', 'Status'),
            ];
      }
      
      /**
      * @inheritdoc
      * @return UsersQuery the active query used by this AR class.
      */
      public static function find()
      {
            return new UsersQuery(get_called_class());
      }
      /**
      * Finds user by username
      *
      * @param string $username
      * @return static|null
      */
      public static function findByUsername($username)
      {
            
            return self::find()->where("user_name = '$username' and status = 1")->one();
      }
      
      /**
      * Validates password
      *
      * @param string $password password to validate
      * @return bool if password provided is valid for current user
      */
      public function validatePassword($password)
      {
            //return password_verify($password, $this->password);
            return $this->password === $password;
      }
      
      
      public static function findIdentity($id)
      {
            return self::findOne($id);
      }
      
      /**
      * @inheritdoc
      */
      public static function findIdentityByAccessToken($token, $type = null)
      {
            throw new \yii\base\NotSupportedException();
      }
      /**
      * @inheritdoc
      */
      public function getId()
      {
            return $this->id;
      }
      
      /**
      * @inheritdoc
      */
      public function getAuthKey()
      {
            //return $this->authKey;
            throw new \yii\base\NotSupportedException();
      }
      /**
      * @inheritdoc
      */
      public function validateAuthKey($authKey)
      {
            return $this->authKey === $authKey;
      }
      public function getUsername()
      {
            return \Yii::$app->user->identity->user_name;
      }
      
}
