<?php
namespace frontend\models;

use Yii;
/**
 * author <oleg rostovtsev>
 */
class Test {
    /**
     * 
     * @param integer $max
     * @return array
     */
    public static function getNewsList($max) {
        
        $max = intval($max);
        $sql = 'SELECT * FROM news LIMIT '.$max;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        $helper = Yii::$app->stringHelper;
        foreach ($result as &$item) {
            $item['content'] = $helper->getShort($item['content']);
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
}
