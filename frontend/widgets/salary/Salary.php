<?php

namespace frontend\widgets\salary;
use yii\base\Widget;
use frontend\models\Employee;
use Yii;

class Salary extends Widget {
    
    public $limit = 2;
    public $column = array();
    public function run() {
        $list = Employee::getEmployeeColumn($this->limit, $this->column);
        return $this->render('block_1', [
               'list' => $list,
               'column' => $this->column,
        ]);
    }
}