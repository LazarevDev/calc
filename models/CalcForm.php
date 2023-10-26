<?php

namespace app\models;

use yii\base\Model;

class CalcForm extends Model {
    public $raw_types;
    public $tonnage;
    public $months;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['raw_types', 'tonnage', 'months'], 'required']
        ];
    }

};
