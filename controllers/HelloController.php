<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04.02.2019
 * Time: 22:31
 */

namespace app\controllers;


use yii\web\Controller;

class HelloController extends Controller
{
    public function actionWorld()
    {
       //return $this->render('helloworld');
       //return $this->renderPartial('helloworld');//частичный, неполный
        return $this->render('helloworld',[
            'what' => 'World'
        ]);
    }


}