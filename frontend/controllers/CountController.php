<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

class CountController extends Controller {

    public function actionIndex() {
        $news_count = Test::getNewsNumber();
        return $this->render('newscount', [
                    'number' => $news_count,
        ]);
    }

}
