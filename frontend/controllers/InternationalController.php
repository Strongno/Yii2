<?php

namespace frontend\controllers;

use yii\base\Controller;
use Yii;
use frontend\models\International;

class InternationalController extends Controller {

    public function actionIndex() {
        $model = new International();
        $model->validate();
        return $this->render('index',[
            'model' => $model,
        ]);
    }

}
