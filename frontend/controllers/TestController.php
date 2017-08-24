<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;
use Faker\Factory;
use frontend\models\News;
/**
 * author <oleg rostovtsev>
 */
class TestController extends Controller {

    public function actionIndex() {
        $max = Yii::$app->params['maxNewsInList'];
        $max_word = Yii::$app->params['numberOfWord'];
        $cutword = Yii::$app->params['shortWord'];
//        $list = Test::getNewsList($max);
//        $list = Test::getNewsList($max_word);
        $list = Test::getNewsList($cutword);
        return $this->render('index', [
                    'list' => $list,
        ]);
    }

    public function actionView($id) {
        $item = Test::getItem($id);
        return $this->render('view', [
                    'item' => $item,
        ]);
    }

    public function actionMail() {
        $result = Yii::$app->mailer->compose()
                ->setFrom('ukooatc@gmail.com')
                ->setTo('ukooatc@gmail.com')
                ->setSubject('Тема сообщения')
                ->setTextBody('Текст сообщения')
                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();
        var_dump($result);
        die;
    }

    public function actionGenerate() {
        for ($i = 0; $i<100; $i++) {
        $faker = Factory::create();
        
        $newsItem = new News();
        $newsItem->title = $faker->text(35);
        $newsItem->content = $faker->text(rand(1000,2000));
        $newsItem->status = rand(0,1);
        $newsItem->save();
        }
    }

}
