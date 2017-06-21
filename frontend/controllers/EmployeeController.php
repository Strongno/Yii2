<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;
use frontend\models\example\Human;
use frontend\models\example\Animal;

class EmployeeController extends Controller {

    public function actionIndex() {

        $employee1 = new Employee();
        $employee1->firstName = 'Alex';
        $employee1->lastName = 'Smith';
        $employee1->middleName = 'John';
        $employee1->salary = '1000';

        echo $employee1['salary'];

        foreach ($employee1 as $attr => $value) {
            echo "$attr : $value </br>";
        }

        $array = $employee1->toArray();

        //print_r($array);
        //print_r($employee1->getAttributes());
        print_r($employee1->attributes);
        print_r($employee1->attributes());
    }

    public function actionTest() {
        $human = new Human();
        $animal = new Animal();
        $animal->walk();
        echo '<br>';
        $human->walk();
    }

    public function actionRegister() {
        $model = new Employee();
        $model->scenario = Employee::SCENATION_EMPLOYEE_REGISTER;
        $formData = Yii::$app->request->post();
        
        var_dump($formData);
        if ($model->load(Yii::$app->request->post())) {
//             $model->attributes = $formData['Employee'];
            if ($model->validate() && $model->save($model->attributes)) {
                Yii::$app->session->setFlash('success', 'Registered');
            }
        }
        return $this->render('register', [
                    'model' => $model,
        ]);
    }

    public function actionUpdate() {
        $model = new Employee();
        $model->scenario = Employee::SCENATION_EMPLOYEE_UPDATE;
        $formData = Yii::$app->request->post();
//        print_r($formData);
        if (Yii::$app->request->isPost) {
//            $model->attributes = $formData['Employee'];
            $model->load(Yii::$app->request->post());
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'UPDATED');
            }
        }
        return $this->render('update', [
                    'model' => $model,
        ]);
    }
    
}
