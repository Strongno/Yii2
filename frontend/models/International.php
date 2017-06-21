<?php

namespace frontend\models;

use yii\base\Model;

class International extends Model {
    public  $username;
    public $password;
    
    public function rules() {
        return [
           [['username','password'], 'required'],
           ['username', 'safe'] 
        ];
        
    }
}