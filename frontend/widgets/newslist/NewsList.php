<?php

namespace frontend\widgets\newslist;
use frontend\models\Test;
use Yii;

use yii\base\Widget;

class NewsList extends Widget {
    
    public $showLimit = null;
    public function run() {
        $cutword = Yii::$app->params['shortWord'];
        if ($this->showLimit) {
            $limit = $this->showLimit;
        }
        $list = Test::getNewsList($cutword, $limit);
        return $this->render('block', [
                    'list' => $list,
        ]);
    }
}