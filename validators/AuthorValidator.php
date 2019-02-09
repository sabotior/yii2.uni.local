<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09.02.2019
 * Time: 1:02
 */

namespace app\validators;


use yii\validators\Validator;

class AuthorValidator extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        if ($model->$attribute != 'Alex'){
            $model->addError($attribute, 'Вы не автор задачи');
        }
    }

}