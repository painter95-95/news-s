<?php

use yii\db\Migration;

/**
 * Handles the creation of table `photos`.
 */
class m170807_211454_create_photos_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('photos', [
            'id' => $this->primaryKey(),
            'path' => 'string',
            'cat_id' => 'int',
            'title_uz' => 'string',
            'title_ru' => 'string',
            'title_en' => 'string',
            'title_uc' => 'string',
            'title_cor' => 'string',
            'create_at' => $this->dateTime(),
            'update_at' => $this->dateTime(),

        ]);
        $this->addForeignKey('fk_photo_cat_id', 'photos', 'cat_id', 'cat', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('photos');
    }
}
