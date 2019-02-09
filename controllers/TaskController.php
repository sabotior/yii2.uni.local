<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.02.2019
 * Time: 10:46
 *
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\Task;


class TaskController extends Controller
{
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
    }
}