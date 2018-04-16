<?php

use yii\db\Migration;

/**
 * Handles the creation of table `menu`.
 */
class m170807_043901_create_menu_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'name_uz' => 'string',
            'name_cor' => 'string',
            'name_en' => 'string',
            'name_ru' => 'string',
            'name_uc' => 'string',
            'title_uz' => 'string',
            'title_ru' => 'string',
            'title_en' => 'string',
            'title_cor' => 'string',
            'title_uc' => 'string',
            'sort' => 'int',
            'target' => 'string',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('menu');
    }
}
