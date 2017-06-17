<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m170617_080801_create_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'email' => $this->string(255)->unique(),
            'comment' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comments');
    }
}
