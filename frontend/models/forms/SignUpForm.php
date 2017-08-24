<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\User;
use Yii;
use frontend\models\events\UserRegisteredEvent;

class SignUpForm extends Model {

    public $username;
    public $password;
    public $email;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            [['username'], 'unique', 'targetClass' => User::className()],
            
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            [['email'], 'unique', 'targetClass' => User::className()],
            
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }
    /*
     * 
     * $return User|null
     */
    public function save() {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);
            
            if ($user->save()) {
               $event = new UserRegisteredEvent();
               $event->user = $user;
               $event->subject = 'You have registered';
               
               $user->trigger(User::USER_REGISTERED, $event);
               
               return $user; 
            }
        }
    }

}
