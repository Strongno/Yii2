<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\User;
use Yii;

class SignInForm extends Model {

    public $username;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['password', 'required'],
            ['password', 'validatePassword'],
        ];
    }
    
    public function login() {
        if ($this->validate()) {
            $user = User::findUsername($this->username);
            return Yii::$app->user->login($user);
        }
    }
    
    public function validatePassword($attribute, $params) {
        $user = User::findUsername($this->username);
        if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect password');
        }
        
    }


}
