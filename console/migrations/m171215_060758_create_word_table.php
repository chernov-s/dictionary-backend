<?php

use yii\db\Migration;

/**
 * Handles the creation of table `words`.
 */
class m171215_060758_create_word_table extends Migration
{
    const TABLE_NAME = 'word';
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(self::TABLE_NAME, [
            "id" => $this->primaryKey(),
            "user_id" => $this->integer()->notNull(),
            "name" => $this->string(100),
            "value" => $this->text(),
            "created_at" => $this->integer(),
            "updated_at" => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
