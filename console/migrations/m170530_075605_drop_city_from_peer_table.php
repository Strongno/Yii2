<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `city_from_peer`.
 */
class m170530_075605_drop_city_from_peer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('peer', 'city');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('peer', 'city', $this->string());
    }
}
