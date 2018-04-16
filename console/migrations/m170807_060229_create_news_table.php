<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m170807_060229_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'logo' => $this->string('100'),
            'title_uz' => $this->string('100'),
            'title_ru' => $this->string('100'),
            'title_en' => $this->string('100'),
            'title_cor' => $this->string('100'),
            'title_uc' => $this->string('100'),
            'mini_desc_uz' => $this->string('255'),
            'mini_desc_ru' => $this->string('255'),
            'mini_desc_en' => $this->string('255'),
            'mini_desc_cor' => $this->string('255'),
            'mini_desc_uc' => $this->string('255'),
            'desc_uz' => $this->string('255'),
            'desc_ru' => $this->text(),
            'desc_en' => $this->text(),
            'desc_cor' => $this->text(),
            'desc_uc' => $this->text(),
            'create_at' => 'datetime',
            'update_at' => 'datetime',
            'cat_id' => 'int',
            'author' => 'int',
        ]);
        $this->addForeignKey('fk_news_cat_id', 'news', 'cat_id', 'cat', 'id');
        $this->addForeignKey('fk_news_user_id', 'news', 'author', 'user', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
