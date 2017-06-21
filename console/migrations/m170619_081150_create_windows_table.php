<?php

use yii\db\Migration;

/**
 * Handles the creation of table `windows`.
 */
class m170619_081150_create_windows_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('windows', [
            'id' => $this->primaryKey(),
            'width' => $this->string(255),
            'height' => $this->string(255),
            'inside' => $this->integer(),
            'openings' => $this->integer(),
            'color' => $this->string(255),
            'sill' => $this->char(10),
            'email' => $this->string(255),
            'name' => $this->string(255),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('windows');
    }
}
