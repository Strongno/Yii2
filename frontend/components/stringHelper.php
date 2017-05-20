<?php

namespace frontend\components;

use Yii;

class StringHelper {

    private $limit_letter;
    private $limit_word;
    private $limit_cutword;

    public function __construct() {
        $this->limit_letter = Yii::$app->params['shortTextLimit'];
        $this->limit_word = Yii::$app->params['numberOfWord'];
        $this->limit_cutword = Yii::$app->params['shortWord'];
    }

    public function getShort($string, $limit = null) {
        if ($limit === null) {
            $limit = $this->limit_letter;
        }
        $result = str_word_count($string);
        var_dump($result);
        die;
    }

    public function getNumberOfWord($string, $number = null) {
        if ($number === null) {
            $number = $this->limit_word;
        }

        $words_array = str_word_count($string, 1);
        $result = array_slice($words_array, 0, $number);
        $result = implode(' ', $result);
        return $result;
    }

    public function getShortW($str, $limit = null, $postfix = '...') {
        if ($limit === null) {
            $limit = $this->limit_cutword;
        }
        if (strlen($str) <= $limit)
            return $str;

        $temp = substr($str, 0, $limit);
        return substr($temp, 0, strrpos($temp, ' ')) . $postfix;
    }

}
