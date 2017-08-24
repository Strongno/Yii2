<?php

namespace frontend\models\events;

use yii\base\Event;
use frontend\models\User;

class UserRegisteredEvent extends Event {
    /*
     * @var User
     */
    public $user;
    public $subject;
    public function getEmail() {
        return $this->user->email;
    }

    /*
     * @var string
     */

    public function getSubject() {
        return $this->subject;
    }

}
