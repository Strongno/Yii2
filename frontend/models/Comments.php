<?php

namespace frontend\models;
use Yii;
use yii\base\Model;

class Comments extends Model {

    public $name;
    public $email;
    public $comment;

    public function rules() {

        return [
            [['name', 'comment'], 'required'],
            ['email', 'email'],
        ];
    }

    public function save($attributes) {
        $values = array_values($attributes);
        $string_attributes = implode("','", $attributes);
        // print_r($string_attributes);die;
        $sql = "INSERT INTO comments (id, name, email, comment) VALUES (null , '{$string_attributes}')";
        $result = Yii::$app->db->createCommand($sql)->execute();
        return $result;
    }
    
    public function get() {
      $sql = 'SELECT * FROM comments';
      return Yii::$app->db->createCommand($sql)->queryAll();
    }

}
