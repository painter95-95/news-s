<?php

use yii\db\Migration;

/**
 * Handles the creation of table `follow`.
 */
class m170807_211956_create_follow_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('follow', [
            'id' => $this->primaryKey(),
            'name' => $this->string('100'),
            'alias' => $this->string('100'),
            'icon' => $this->string('100'),
            'sort' => $this->integer('11'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('follow');
    }
}
