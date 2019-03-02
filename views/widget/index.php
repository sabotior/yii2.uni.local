<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.03.2019
 * Time: 12:25
 */



/*
$form = \yii\widgets\ActiveForm::begin();//Можно передать например id формы, параметры при необходимости
\yii\widgets\ActiveForm::end();*/

use \yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin();

//метод филд создает поле, в котором будет потом использоваться input и привязывает с атрибутом модели
//передаем модель и атрибут(поле)
//далее по цепочке с каким видом импута связывать
/*
echo $form->field($model, 'title')->textInput(['class' => 'myClass'])->label('Заголовок');
echo $form->field($model, 'content')->textInput(['class' => 'contClass'])->label('Описание');
*/

echo $form->field($model, 'title')->textInput()->label('Заголовок');
echo $form->field($model, 'content')->textInput()->label('Описание');
echo Html::submitButton("Отправить", ['class' => 'btn btn-danger']);


ActiveForm::end();

/*echo app\widgets\MyWidget::widget();
echo app\widgets\MyWidget::widget(['message' => 'второй']);
echo app\widgets\MyWidget::widget(['message' => 'третий']);
*/
\app\widgets\MyWidget::begin();
echo '123456';
\app\widgets\MyWidget::end();