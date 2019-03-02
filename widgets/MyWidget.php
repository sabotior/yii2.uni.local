<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.03.2019
 * Time: 14:38
 */

namespace app\widgets;


use yii\base\Widget;

class MyWidget extends Widget
{
    public $message = "первый";
    public function init()
    {
        echo "<div class='my'>";
    }

    public function run()
    {
        //return "<h1>Я {$this->message} виджет</h1>";
        return $this->render("my", ['message' => $this->message]);

    }

}