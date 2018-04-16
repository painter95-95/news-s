<?php

use yii\db\Migration;

/**
 * Handles the creation of table `child_menu`.
 */
class m170807_053549_create_child_menu_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('child_menu', [
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
            'menu_id' => 'int',

        ]);
        $this->addForeignKey('fk_menu_childmenu_id', 'child_menu','menu_id', 'menu', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('child_menu');
    }
}
