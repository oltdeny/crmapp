<?php

namespace app\models\customer;


class Customer
{
    public $name;
    /** @var \DateTime */
    public $birth_date;
    public $notes = '';
    public $phones = [];

    public function __construct($name, $birth_date)
    {
        $this->name = $name;
        $this->birth_date = $birth_date;
    }
}