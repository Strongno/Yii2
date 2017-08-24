<?php

namespace frontend\controllers;

use frontend\models\Author;
use frontend\controllers\behaviors\AccessBehavior;
use Yii;


class AuthorController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            AccessBehavior::className(),
        ];
    }
    public function actionCreate()
    {
        $model = new Author();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Author added');
            return $this->redirect(['author/index']);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Author::findOne($id);
        $model->delete();
        return $this->redirect(['author/index']);
    }

    public function actionIndex()
    {
        $authorList = Author::find()->all();
        return $this->render('index', [
            'authorList' => $authorList,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Author::findOne($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Author added');
            return $this->redirect(['author/index']);
        }
        
        return $this->render('update', [
            'model' => $model,
        ]);
    }
}
