<?php

use yii\db\Migration;

/**
 * Handles the creation of table `feedback`.
 */
class m170807_210908_create_feedback_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('feedback', [
            'id' => $this->primaryKey(),
            'fio' => $this->string('255'),
            'email' => $this->string('50'),
            'phone' => $this->string('50'),
            'subject' => $this->string('100'),
            'body' => $this->text(),
            'address' => $this->string('255'),
            'create_at' => $this->dateTime(),
            'update_at' => $this->dateTime(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('feedback');
    }
}
