<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m170818_055420_create_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'email' => $this->string('100'),
            'name' => $this->string('16'),
            'user_id' => $this->integer(),
            'post_id' => $this->string(),
            'parent_id' => $this->integer(),
            'create_at' => $this->dateTime(),
            'update_at' => $this->dateTime(),
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
