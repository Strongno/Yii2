<?php

namespace console\controllers;

use Yii;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
use console\models\Date;

class MailerController extends \yii\console\Controller {

    public function actionSend() {
        $news_list = News::getList();
        $subscribers = Subscriber::getList();
        Sender::run($subscribers, $news_list);
        Date::writeDate();
    }

}
