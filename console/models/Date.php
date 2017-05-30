<?php

namespace console\models;

class Date {

    public static function getDate() {
        ini_set('date.timezone', 'Europe/Kiev');
        $date = date('Y-m-d h:i:s');
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
