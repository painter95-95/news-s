<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pages`.
 */
class m170808_101941_create_pages_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'name' => $this->string('100'),
            'title_uz' => $this->string('255'),
            'title_ru' => $this->string('255'),
            'title_en' => $this->string('255'),
            'title_cor' => $this->string('255'),
            'title_uc' => $this->string('255'),
            'mini_desc_uz' => $this->string('255'),
            'mini_desc_ru' => $this->string('255'),
            'mini_desc_en' => $this->string('255'),
            'mini_desc_uc' => $this->string('255'),
            'mini_desc_cor' => $this->string('255'),
            'desc_uz' => $this->text(),
            'desc_en' => $this->text(),
            'desc_ru' => $this->text(),
            'desc_uc' => $this->text(),
            'desc_cor' => $this->text(),
            'alias' => $this->string('100'),
            'logo' => $this->string('100'),
            'post_id' => $this->string('100'),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('pages');
    }
}
