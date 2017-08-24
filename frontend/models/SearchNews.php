<?php

namespace frontend\models;

use Yii;

class SearchNews {
    public function simpleSearch($keyword) {
        //fix keyword security
        $sql = "SELECT content FROM news WHERE content LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
