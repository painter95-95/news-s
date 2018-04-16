<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m170807_205955_create_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'logo' => $this->string('100'),
            'title_uz' => $this->string('100'),
            'title_ru' => $this->string('100'),
            'title_en' => $this->string('100'),
            'title_uc' => $this->string('100'),
            'title_cor' => $this->string('100'),
            'mini_desc_uz' => $this->string('255'),
            'mini_desc_ru' => $this->string('255'),
            'mini_desc_en' => $this->string('255'),
            'mini_desc_uc' => $this->string('255'),
            'mini_desc_cor' => $this->string('255'),
            'desc_uz' => $this->text(),
            'desc_ru' => $this->text(),
            'desc_en' => $this->text(),
            'desc_uc' => $this->text(),
            'desc_cor' => $this->text(),
            'create_at' => $this->dateTime(),
            'update_at' => $this->dateTime(),
            'cat_id' => $this->integer('11'),
        ]);
        $this->addForeignKey('fk_articles_cat_id', 'article', 'cat_id', 'cat', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article');
    }
}
