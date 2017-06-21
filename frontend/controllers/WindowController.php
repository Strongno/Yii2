<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Window;

class WindowController extends Controller {
    
    public function actionIndex() {
        $model = new Window;
        $model->attributes = Yii::$app->request->post();
        if (Yii::$app->request->isPost) {
            if ($model->validate() && $model->save($model->attributes)) {
//                $model->sendEmail($model->attributes['name']);
                 Yii::$app->session->setFlash('success', 'Registered');
            }
        }
        return $this->render('index',[
            'model' => $model
        ]);
    }
}