<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task_statuses}}`.
 */
class m190224_123918_create_task_statuses_table extends Migration
{
    protected $tableName = 'task_statuses';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //$this->createTable('{{%task_statuses}}', [
            $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)
        ]);

        $this->batchInsert($this->tableName, ['name'], [
            ['Новая'],
            ['В работе'],
            ['Выполнена'],
            ['Тестирование'],
            ['Доработка'],
            ['Закрыта'],
        ]);

        $taskTable = \app\models\tables\Tasks::tableName();

        //$this->addColumn($taskTable,'status', $this->integer());

        //Внешний ключ
        $this->addForeignKey('fk_task_statuses',$taskTable, 'status_id', $this->tableName, 'id');

        $this->update($taskTable, ['status_id' => 1]);
    }





    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       // $this->dropTable('{{%task_statuses}}');
        $this->dropTable($this->tableName);
    }
}
