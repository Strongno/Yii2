<?php

use yii\db\Migration;

class m170530_075240_add_salary_to_peer_table extends Migration
{
    public function up()
    {
        $this->addColumn('peer', 'salary', $this->integer());
    }

    public function down()
    {
        $this->dropColumn('peer', 'salary');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
