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
        $model = new Tasks();
        $model->name = "new Task";
        $model->description = "sdgdfgbdfb";
        $model->date = date("Y-m-d");
        $model->responsible_id = 2;
        $model->save();
    }




}