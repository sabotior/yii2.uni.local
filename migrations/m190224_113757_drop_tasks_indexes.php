<?php

use yii\db\Migration;

/**
 * Class m190224_113757_drop_tasks_indexes
 */
class m190224_113757_drop_tasks_indexes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropIndex(
            'ix_tasks_responsible',
            'tasks'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190224_113757_drop_tasks_indexes cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190224_113757_drop_tasks_indexes cannot be reverted.\n";

        return false;
    }
    */
}
