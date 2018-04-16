<?php

use yii\db\Migration;

/**
 * Handles the creation of table `source_message`.
 */
class m170807_061618_create_source_message_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('source_message', [
            'id' => $this->primaryKey(),
            'category' => $this->string('50'),
            'message' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('source_message');
    }
}
