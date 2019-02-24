<?php

use yii\db\Migration;

/**
 * Handles adding creator_id to table `{{%tasks}}`.
 */
class m190224_111643_add_creator_id_column_to_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tasks', 'creator_id', $this->integer());
        $this->addColumn('tasks', 'deadline', $this->date());
        $this->addColumn('tasks', 'status_id', $this->integer());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('post', 'creator_id');
        $this->dropColumn('post', 'deadline');
        $this->dropColumn('post', 'status_id');
    }
}
