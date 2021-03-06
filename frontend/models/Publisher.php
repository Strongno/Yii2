<?php

namespace frontend\models;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "publisher".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_registered
 * @property integer $identity_number
 */
class Publisher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'publisher';
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
            'name' => 'Name',
            'date_registered' => 'Date Registered',
            'identity_number' => 'Identity Number',
        ];
    }
    /*
     * @property publisher[] list of Publishers name
     */
    static public function getList() {
        $list = self::find()->asArray()->all();
//        $publisher = Array();
//        foreach ($list as $pub) {
//            $publisher[] = $pub['name'];
//        }
//        return $publisher;
        return ArrayHelper::map($list, 'id', 'name');
    }
}
