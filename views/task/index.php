<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.03.2019
 * Time: 18:52
 */
//var_dump($model);
//echo \app\widgets\TaskPreview::widget(['model' => $model]);
echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => function($model){
        return \app\widgets\TaskPreview::widget(['model' => $model]);
    },
    'summary' => false,
    'options' => [
        'class' => 'preview-container'
    ]
]);