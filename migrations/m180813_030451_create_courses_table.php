<?php

use yii\db\Migration;

/**
 * Handles the creation of table `curses`.
 */
class m180813_030451_create_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('courses', [
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
        $this->dropTable('courses');
    }
}
