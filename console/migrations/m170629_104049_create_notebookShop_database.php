<?php

use yii\db\Migration;

class m170629_104049_create_notebookShop_database extends Migration
{
    public function up()
    {
        $this->createProduct();
        $this->createCategory();
        $this->createMaker();
    }

    public function down()
    {
        $this->dropTable('product');
        $this->dropTable('category');
        $this->dropTable('maker');
    }

    private function createProduct() {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'product' => $this->string(),
            'date_published' => $this->date(),
        ]);
    } 
    
    private function createCategory() {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'category' => $this->string(),
            'product_id' => $this->integer(),
        ]);
    }  
    
    private function createMaker() {
        $this->createTable('maker', [
            'id' => $this->primaryKey(),
            'maker' => $this->string(),
            'product_id' => $this->integer(),
        ]);
    }  
}
