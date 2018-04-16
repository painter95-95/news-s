<?php

use yii\db\Migration;

/**
 * Handles the creation of table `videos`.
 */
class m170808_023054_create_videos_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('videos', [
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
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('videos');
    }
}
