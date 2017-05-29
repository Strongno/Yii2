<?php

namespace console\models;

use Yii;

/**
 * 
 */
class News {

    const STATUS_NOT_SEND = 1;

    public static function getList() {

        $sql = 'SELECT * FROM news WHERE status =' . self::STATUS_NOT_SEND;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return self::prepareList($result);
    }

    public static function prepareList($result) {
        $helper = Yii::$app->stringHelper;
        foreach ($result as &$item) {
//            $item['content'] = $helper->getShort($item['content']);
            $item['content'] = $helper->getShortW($item['content']);
        }
        return $result;
    }

}
