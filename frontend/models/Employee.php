<?php

namespace frontend\models;
use Yii;
use yii\base\Model;


class Employee extends Model {
    
    const SCENATION_EMPLOYEE_REGISTER = 'employee_register';
    const SCENATION_EMPLOYEE_UPDATE = 'employee_update';
    public $firstName;
    public $lastName;
    public $middleName;
    public $email;
    public $dateBirth;
    public $dateStart;
    public $city;
    public $idCode;
    
    public function scenarios() {
        return [
            self::SCENATION_EMPLOYEE_REGISTER =>['firstName', 'middleName', 'lastName', 'email', 'city', 'dateBirth', 'dateStart', 'idCode'],
            self::SCENATION_EMPLOYEE_UPDATE =>['firstName', 'lastName', 'middleName'],
        ];
    }
    
    public function rules() {
        return [
            [['firstName','lastName','email', 'dateStart', 'idCode'], 'required'],
            [['dateBirth', 'dateStart'], 'date', 'format' => 'php:Y-m-d'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['idCode'], 'string' , 'length' => [10,12]],
            [['email'], 'email'],
            //[['email'], 'unique'],
            [['middleName'], 'required', 'on' =>self::SCENATION_EMPLOYEE_UPDATE],
        ];
    }
    /**
     * Saves data from registes input to db->table employee
     * @param array $attributes array of $this->attributes It matters the sequence of public properties
     * @return boolean true/false
     */
    public function save($attributes) {
        $values = array_values($attributes);
        $string_attributes = implode("','", $attributes);
       // print_r($string_attributes);die;
        $sql = "INSERT INTO employee (id, firstName, secondName, lastName, email, date_Birth, date_Start, city, id_code) VALUES (null , '{$string_attributes}')";
        $result = Yii::$app->db->createCommand($sql)->execute();
        return $result;
    }
    
    public static function getEmployeeColumn($limit, $column) {
        $limit = intval($limit);
        $column_implode = implode(',', $column);
        $sql = "SELECT $column_implode FROM employee ORDER BY {$column[0]} DESC LIMIT {$limit} ";
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return $result;
    }
}
