<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "maker".
 *
 * @property integer $id
 * @property string $maker
 * @property integer $product_id
 */
class Maker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'maker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'maker' => 'Maker',
            'product_id' => 'Product ID',
        ];
    }
}
