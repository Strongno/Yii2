<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Product;
use frontend\models\Category;
use frontend\models\Maker;


class NotebookShopController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $productList = Product::find()->all();
        return $this->render('index', [
            'productList' => $productList,
        ]);
    }
    
    public function actionCreateProduct() {
        
        $model = new Product();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Saved Succesfully');
        }
        
        return $this->render('product', [
            'model' => $model,
        ]);
    }
    
    public function actionCreateCategory() {
        return $this->render('category');
    }
    
    public function actionCreateMaker() {
        return $this->render('maker');
    }
    

}
