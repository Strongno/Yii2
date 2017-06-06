<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m170606_064807_create_employee_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string(255),
            'secondName' => $this->string(255),
            'lastName' => $this->string(255),
            'email' => $this->string(255)->unique(),
            'date_birth' => $this->date(),
            'date_start' => $this->date(),
            'city' => $this->integer(3),
            'id_code' => $this->integer(10),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('employee');
    }
}
