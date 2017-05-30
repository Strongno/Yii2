<?php

namespace console\controllers;
use console\models\Date;

class DateController extends \yii\console\Controller{
    
    public function actionWriteDate() {
        //$date = Date::getDate();
        Date::writeDate();
    }
}

