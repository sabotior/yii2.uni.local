<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.02.2019
 * Time: 10:46
 *
 */

namespace app\controllers;


use app\models\tables\Tasks;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\Task;


class TaskController extends Controller
{

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Tasks::find()
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
        //return $this->render('index', ['model' => Tasks::findOne(7)]);
    }
    public function actionOne($id) {
        var_dump($id);exit;

    }




   /*
    * Первые уроки
     public function actionIndex()
    {
        echo "it`s index"; exit;
    }

    public function actionTest()
    {
        $model = new Task([
            'name' => 1,
            'text' => 'to do lesson1',
            'author' => 'lex'
        ]);


        var_dump($model -> validate());
        var_dump($model -> getErrors());
        exit;


       // var_dump($model);exit;
    }*/
}