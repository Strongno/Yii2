<?php
namespace frontend\models;

use Yii;
/**
 * author <oleg rostovtsev>
 */
class Test {
    /**
     * 
     * @param type $max
     * @return type
     */
    public static function getNewsList($max, $limit = null) {
        if ($limit) {
            $limit = $limit;
        }
        else {
            $limit = 5;
        }
        $max = intval($max);
        $sql = "SELECT * FROM news LIMIT $limit";
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        $helper = Yii::$app->stringHelper;
        foreach ($result as &$item) {
//            $item['content'] = $helper->getShort($item['content']);
              $item['content'] = $helper->getShortW($item['content']);
        }
        return $result;
    }
    /**
     * 
     * @param integer $id
     * @return array|false
     */
    public static function getItem($id) {
        $id = intval($id);
        $sql = "SELECT * FROM news WHERE id = $id";
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
    
    public static function getNewsNumber() {
        $sql = "SELECT count(*) FROM news";
        return Yii::$app->db->createCommand($sql)->queryColumn();
    }
}
