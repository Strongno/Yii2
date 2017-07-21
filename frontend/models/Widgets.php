<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "widgets".
 *
 * @property integer $id
 * @property string $name
 * @property string $sname
 */
class Widgets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{widgets}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'sname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'sname' => 'Sname',
        ];
    }
}
