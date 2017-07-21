<?php

namespace frontend\controllers;
use frontend\models\Widgets;

class WidgetTestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Widgets;
        $list = Widgets::find()->asArray()->all();
        return $this->render('index', [
            'model' => $model,
            'list' => $list,
        ]);
    }

}
