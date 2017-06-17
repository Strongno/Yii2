<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Comments;

class PortfolioController extends Controller {
    
    public $layout = 'portfolio';
    
    public function actionIndex() {
       $model = new Comments;
       if (Yii::$app->request->isPost) {
           $model->attributes = Yii::$app->request->post();
           if ($model->validate() && $model->save($model->attributes)) {
               
           }
       }
       $comments = $model->get();
       return $this->render('index', [
           'comments' => $comments,
       ]);
    }
}