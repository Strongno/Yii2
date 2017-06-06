<?php

use yii\db\Migration;

/**
 * Handles the creation of table `peer`.
 */
class m170530_072727_create_peer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('peer', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'birth' => $this->date(),
            'city' => $this->string(255),
            'start' => $this->date(),
            'exp' => $this->integer(2),
            'position' => $this->string(255),
            'email' => $this->string(),
            
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('peer');
    }
}
