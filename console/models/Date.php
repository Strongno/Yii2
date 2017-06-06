<?php

namespace console\models;
use Yii;
class Date {
    /**
     * 
     * @return string $date
     * 
     */
    public static function getDate() {
        ini_set('date.timezone', 'Europe/Kiev');
        //$date = date('Y-m-d h:i:s');
        $date = Yii::$app->formatter->asDate('now', 'php:Y-m-d h:i:s');
        
        //Yii::$app->formatter->locale = 'ru-RU';
        //$date = Yii::$app->formatter->asDate('2014-01-01');
        //$date = Yii::$app->formatter->asDateTime('now');
        return $date;
    }

    public static function writeDate() {
        $date = self::getDate();
        $file = fopen (dirname(__DIR__).'/../frontend/web/test.txt', 'a');
        fwrite($file, $date.PHP_EOL);
        fclose($file);
        return true;
    }

}
