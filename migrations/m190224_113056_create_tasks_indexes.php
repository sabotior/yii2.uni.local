<?php

use yii\db\Migration;

/**
 * Class m190224_113056_create_tasks_indexes
 */
class m190224_113056_create_tasks_indexes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex("ix_task_responsible", "tasks", 'responsible_id');
        $this->createIndex("ix_task_creator", "tasks", 'creator_id');
        $this->createIndex("ix_task_status", "tasks", 'status_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190224_113056_create_tasks_indexes cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190224_113056_create_tasks_indexes cannot be reverted.\n";

        return false;
    }
    */
}
