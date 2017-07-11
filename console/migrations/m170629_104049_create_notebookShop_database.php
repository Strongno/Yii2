<?php

use yii\db\Migration;

class m170629_104049_create_notebookShop_database extends Migration
{
    public function up()
    {
        $this->createProduct();
        $this->createCategory();
        $this->createMaker();
        $this->createProductToMaker();
        $this->createProductToCatagory();
    }

    public function down()
    {
        $this->dropTable('product');
        $this->dropTable('category');
        $this->dropTable('maker');
        $this->dropTable('product_to_maker');
        $this->dropTable('product_to_category');
    }

    private function createProduct() {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'product' => $this->string(),
            'options' => $this->string(),
            'price' => $this->string(),
            'date_published' => $this->date(),
            'maker_id' => $this->integer(),
        ]);
    } 
    
    private function createCategory() {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'category' => $this->string(),
            'status' => $this->integer(),
        ]);
    }  
    
    private function createMaker() {
        $this->createTable('maker', [
            'id' => $this->primaryKey(),
            'maker' => $this->string(),
        ]);
    }
    private function createProductToMaker() {
        $this->createTable('product_to_maker', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'maker_id' => $this->integer(), 
        ]);
    }  
    
    private function createProductToCatagory() {
        $this->createTable('product_to_category', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'category_id' => $this->integer(), 
        ]);
    }  
}
