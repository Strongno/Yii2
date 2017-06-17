<?php

namespace frontend\controllers;

use yii\web\Controller;

class HtmlHelperController extends Controller {

    public function actionDemo() {
        return $this->render('demo');
    }
    public function actionEscapeOutput() {
        
        $comments = [
            [
                'id' => 10,
                'author' => 'Student',
            ],
            [
                'id' => 11,
                'author' => '<h1><script>alert(1);</script></h1>',
            ],
        ];
        return $this->render('escape-output', [
            'comments' => $comments,
        ]);
    }
}
