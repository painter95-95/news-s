<?php

use yii\db\Migration;

/**
 * Handles the creation of table `status_name`.
 */
class m170807_203307_create_status_name_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('status_name', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string('100'),
            'name_ru' => $this->string('100'),
            'name_en' => $this->string('100'),
            'name_uc' => $this->string('100'),
            'name_cor' => $this->string('100'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('status_name');
    }
}
