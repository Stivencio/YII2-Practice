<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Form extends Model
{
    public $n1;
    public $n2;

    public function rules()
    {
        return [
            [['n1', 'n2'], 'required', 'message' => 'Empty fields'],
            ['n1', 'number'], ['n1', 'number']
        ];
    }
}


?>