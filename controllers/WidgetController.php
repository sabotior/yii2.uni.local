<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.03.2019
 * Time: 12:20
 */

namespace app\controllers;


use app\models\tables\Test;
use yii\web\Controller;
use yii\helpers\BaseVarDumper;

class WidgetController extends Controller
{
public function actionIndex()
{

   //BaseVarDumper::dump(\Yii::$app->request->post(), $depth = 2 , $highlight = true);
    //exit;

$model = new Test([
    'title' => 'титл',
    'content' => 'текст'
]);

return $this->render('index', ['model' => $model]);
}
}