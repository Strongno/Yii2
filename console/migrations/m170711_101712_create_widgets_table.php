<?php

use yii\db\Migration;

/**
 * Handles the creation of table `widgets`.
 */
class m170711_101712_create_widgets_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('widgets', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'sname' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('widgets');
    }
}
