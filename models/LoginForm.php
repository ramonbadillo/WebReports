<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
* LoginForm is the model behind the login form.
*
* @property User|null $user This property is read-only.
*
*/
class LoginForm extends Model
{
      public $username;
      public $password;
      public $rememberMe = true;
      
      private $_user = false;
      
      
      /**
      * @return array the validation rules.
      */
      public function rules()
      {
            return [
                  // username and password are both required
                  [['username', 'password'], 'required'],
                  // rememberMe must be a boolean value
                  ['rememberMe', 'boolean'],
                  // password is validated by validatePassword()
                  ['password', 'validatePassword'],
            ];
      }
      
      /**
      * Validates the password.
      * This method serves as the inline validation for password.
      *
      * @param string $attribute the attribute currently being validated
      * @param array $params the additional name-value pairs given in the rule
      */
      public function validatePassword($attribute, $params)
      {
            if (!$this->hasErrors()) {
                  $user = $this->getUser();
                  
                  if (!$user || !$user->validatePassword($this->password)) {
                        $this->addError($attribute, 'Incorrect username or password.');
                  }
            }
      }
      
      public function encriptPassword($password)
      {
            $passwordHash = password_hash(
                  $password,
                  PASSWORD_BCRYPT,
                  array(
                        'cost' => 10
                  )
            );
            return $passwordHash;
      }
      
      
      /**
      * Logs in a user using the provided username and password.
      * @return bool whether the user is logged in successfully
      */
      public function login()
      {
            if ($this->validate()) {
                  $session = Yii::$app->session;
                  //$session->set('usertype', $this->getUser()->tipo);
                  $session->set('userid', $this->getUser()->id);
                  return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
            }
            return false;
      }
      
      /**
      * Finds user by [[username]]
      *
      * @return User|null
      */
      public function getUser()
      {
            if ($this->_user === false) {
                  $this->_user = User::findByUsername($this->username);
            }
            
            return $this->_user;
      }
}
