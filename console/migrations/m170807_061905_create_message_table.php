<?php

use yii\db\Migration;

/**
 * Handles the creation of table `message`.
 */
class m170807_061905_create_message_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('message', [
            'id' => 'int',
            'language' => $this->string('10'),
            'translation' => $this->text(),
        ]);
        $this->addForeignKey('fk_mess_sours_id', 'message', 'id', 'source_message', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('message');
    }
}
