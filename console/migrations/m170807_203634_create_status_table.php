<?php

use yii\db\Migration;

/**
 * Handles the creation of table `status`.
 */
class m170807_203634_create_status_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('status_id', [
            'id' => $this->primaryKey(),
            'status_id' => 'int',
            'create_at' => $this->dateTime(),
            'update_at' => $this->dateTime(),
            'post_id' => $this->string('100'),
            'date_start' => $this->dateTime(),
            'date_end' => $this->dateTime(),
        ]);
        $this->addForeignKey('fk_stat_stat_id', 'status_id', 'status_id', 'status_name', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('status');
    }
}
