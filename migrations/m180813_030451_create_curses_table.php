<?php

use yii\db\Migration;

/**
 * Handles the creation of table `curses`.
 */
class m180813_030451_create_curses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('curses', [
            'id' => $this->primarykey(),
            'name' => $this->string()->notNull(),
            'hours' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('curses');
    }
}
