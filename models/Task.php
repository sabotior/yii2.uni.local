<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.02.2019
 * Time: 0:20
 */

namespace app\models;


use http\Params;
use yii\base\Model;
use yii\validators\RequiredValidator;

class Task extends Model
{
    public $name;
    public $text;
    public $author;
    public $startTime;

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'text'], 'string'],
            [['author'], 'authorValidation'],
        ];
    }

    public function authorValidation($attribute, $params)
    {
        if ($this->$attribute != 'Alex'){
            $this->addError($attribute, 'Вы не автор задачи');
        }

    }

}