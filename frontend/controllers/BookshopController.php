<?php

namespace frontend\controllers;
use frontend\models\Book;
use Yii;
use frontend\models\Publisher;

class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {
       $query = Book::find()
//               ->where(['publisher_id' => 1])
               ->orderBy('date_published')
               ->limit(20);
       
       $booklist = $query->all();
        
        return $this->render('index', [
            'booklist' => $booklist,
        ]);
    }
    
    public function actionCreate() {
        $book = new Book();
        $publisher = Publisher::getList();
        if ($book->load(Yii::$app->request->post())) {
            if ($book->save()) {
                Yii::$app->session->setFlash('success', 'Save');
//                return $this->redirect(['bookshop/index']);
                return $this->refresh();
            }
        }
        return $this->render('create', [
            'book' => $book,
            'publisher' => $publisher,
        ]);
    }
    
     public function actionDelete($id)
    {
        $model = Book::findOne($id);
        $model->delete();
        return $this->redirect(['index']);
    }
    
}
