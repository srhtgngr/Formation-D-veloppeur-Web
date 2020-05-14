<?php

namespace Calendar;

use App\Validator;

class EventValidator extends Validator
{
    /**
     *@param array $data
     *@return array|bool
     */
    public function validates(array $data)
    {
        parent::validates($data);
        $this->validate('name', 'minLenght', 3);
        $this->validate('date', 'date');
        $this->validate('start', 'beforeTime', 'end');
        return $this->errors;
    }
}
