<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Window extends Model {

    public $width;
    public $height;
    public $inside;
    public $openings;
    public $color;
    public $sill;
    public $email;
    public $name;

    public function rules() {
        return [
            [['name', 'email', 'width', 'height', 'inside', 'openings', 'color', 'sill'], 'required'],
            ['width', 'integer', 'min' =>70,'max' =>210],
            ['height', 'integer', 'min' =>100,'max' =>200],
            ['openings', 'integer', 'max' => 3],
            ['email', 'email'],
        ];
    }
    
    public function save($attributes) {
        $values = array_values($attributes);
        $string_attributes = implode("','", $attributes);
       // print_r($string_attributes);die;
        $sql = "INSERT INTO windows (id, width, height, inside, openings, color, sill, email, name) VALUES (null , '{$string_attributes}')";
        $result = Yii::$app->db->createCommand($sql)->execute();
        return $result;
    }
    
    public function sendEmail()
    {
        return Yii::$app->mailer->compose()
            ->setTo(Yii::$app->params['adminEmail'])
            ->setFrom(['oleg'])
            ->setSubject()
            ->setTextBody()
            ->send();
    }

}
