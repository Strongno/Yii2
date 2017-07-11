<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $product
 * @property string $date_published
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{product}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product'], 'required'],
            [['date_published'], 'date', 'format' => 'php:Y-m-d']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product' => 'Product',
            'date_published' => 'Date Published',
        ];
    }
    
    public function getMaker() {
        return $this->hasOne(Maker::className(), ['id' => 'maker_id'])->one();
    }
    
    public function getProductToCategory() {
        
        return $this->hasMany(ProductToCategory::className(), ['product_id' => 'id']);
    }
    /*
     * @object Authors[]
     */
    public function getCategory() {
        
        return $this->hasMany(Category::className(),['id' => 'category_id'])->via('productToCategory')->all();
    }
    
    public function getCategoryOne() {
        foreach($this->getCategory() as $category) {
             return $category->category;
        }
    }
}
