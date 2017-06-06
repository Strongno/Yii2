<?php

namespace console\models;
use Yii;

class Sender {
    public static function run($subscribers, $news_list) {
        foreach( $subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('/mailer/newsList', [
                'newslist' => $news_list,
            ])
                ->setFrom('ukooatc@gmail.com')
                ->setTo($subscriber['email'])
                ->setSubject('Тема сообщения')

                ->send();
        }
        
        
    }
}