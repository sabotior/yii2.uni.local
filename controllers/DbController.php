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

          var_dump($db->createCommand(
              "SELECT * FROM test WHERE id = 2"
          )->queryOne());*/

        /* var_dump($db->createCommand(
             "SELECT COUNT(*) FROM test"
         )->queryScalar());

         var_dump($db->createCommand(
             "SELECT id FROM test"
         )->queryColumn());*/

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
        $model->save();*/

        /**Поиск одной записи по id*/
       /*$model = Tasks::findOne([3]);
        var_dump($model);*/

        /**Поиск одной записи по столбцу*/
        /*$model = Tasks::findOne(['name' => 'new Task']);
        var_dump($model);*/

        /**Поиск нескольких записей*/
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



        /*$model = Tasks::findOne(1);
        var_dump($model); /** SELECT * FROM tasks*/

        /** SELECT 'name', 'description' FROM tasks WHERE status_id > :status_id
         *  AND creator_id = :creator_id LIMIT 10
         */
        /*$query = $model->find()
            ->select(['name', 'description'])
            ->where('status_id > :stid')
            ->andWhere(['creator_id', 1])
            ->limit(10)
            ->all();
        */

        exit;


    }
}