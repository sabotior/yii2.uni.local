<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09.02.2019
 * Time: 3:38
 */

namespace app\controllers;


use app\models\tables\Tasks;
use yii\web\Controller;

class DbController extends Controller
{
    public function actionIndex()
    {

        /**Работа с БД*/
/*
        $db = \Yii::$app->db;

        echo "\n\nqueryAll()\n";
        var_dump($db->createCommand(
            "SELECT * FROM test"
        )->queryAll());
        echo "\n\nqueryOne()\n";
          var_dump($db->createCommand(
              "SELECT * FROM test WHERE id = 2"
          )->queryOne());
        echo "\n\nqueryScalar()\n";
         var_dump($db->createCommand(
             "SELECT COUNT(*) FROM test"
         )->queryScalar());
        echo "\n\nqueryColumn()\n";
         var_dump($db->createCommand(
             "SELECT id FROM test"
         )->queryColumn());

        /*$db->createCommand("DELETE FROM test WHERE id = 5")
            ->execute();

        $db->createCommand("DELETE FROM test WHERE id = :id")
            //->bindValue(":id", 4)
            ->bindValues([
                ":id" => 4
            ])->execute();
        exit;
        */
    }
    public function actionActiveRecords()
    {
        /**Создание новой записи*/
        /*$model = new Tasks();
        $model->name = "new Task";
        $model->description = "sdgdfgbdfb";
        $model->date = date("Y-m-d");
        $model->responsible_id = 2;
        $model->save();//сохранить
        */

        /** CREATE */
        /*   $model = new Tasks([
                'name' => 'Task 5',
                'date' => date("Y-m-d"),
                'description' => 'kdjhjfghut',
                'creator_id' => 1,
                'responsible_id' => 2,
                'deadline' => date("Y-m-d"),
                'status_id' => 1,
            ]);

            $model->save();*/




        /**Поиск одной записи по id*/
       /*$model = Tasks::findOne(8);
        var_dump($model);*/

        /**Поиск одной записи по столбцу*/
        /*$model = Tasks::findOne(['name' => 'new Task']);
        var_dump($model);*/

        /**Поиск нескольких записей (все не получиться, см дальше*/
        /*var_dump(Tasks::findAll([1, 2, 3]));
        var_dump(Tasks::findAll(['name' => 'Task 1']));*/

       /**Вернуть все записи*/
        //var_dump(Tasks::find()->all());

        /**Изменение записи*/
        /*$model = Tasks::findOne(1);
         $model->description = 'test';
         $model->save();*/

        /**Удаление записи*/
        /*$model = Tasks::findOne(4);
        $model->delete();*/

        /**Удаление всех записей с условием*/
        /*Tasks::deleteAll(['id > 2 OR id < 5']);
        или
        Tasks::deleteAll(['>', 'id', 5]);*/

        /*
        $model = Tasks::findOne(8);
        var_dump($model->status); /** SELECT * FROM tasks
        */
        /**  Метод find() возвращает объект запросов,
         * позволяет спомощью ООП собрать запрос
         */
        $model = Tasks::findOne(8);
        /*var_dump($model->find()); /** SELECT * FROM tasks*/

        /**
         * SELECT 'name', 'description' FROM tasks WHERE status_id > :status_id
         *  AND creator_id = :creator_id LIMIT 10
         */
        $query = $model->find()
            ->select(['name', 'description'])
            ->where(['>', 'status_id', 1])
            //->where('status_id > :stid')
            ->andWhere(['creator_id', 1])
            ->limit(10);
            //->all();
        var_dump($query);


        exit;


    }
}