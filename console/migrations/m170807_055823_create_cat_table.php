<?php

use yii\db\Migration;

/**
 * Handles the creation of table `cat`.
 */
class m170807_055823_create_cat_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('cat', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string('100'),
            'name_ru' => $this->string('100'),
            'name_en' => $this->string('100'),
            'name_cor' => $this->string('100'),
            'name_uc' => $this->string('100'),
            'title_uz' => $this->string('255'),
            'title_ru' => $this->string('255'),
            'title_en' => $this->string('255'),
            'title_cor' => $this->string('255'),
            'title_uc' => $this->string('255'),
            'logo' => $this->string('255'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('cat');
    }
}
