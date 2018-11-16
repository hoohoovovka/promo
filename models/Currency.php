<?php

namespace models;

class Currency
{
    //dummy data
    private $data = [
        'USDRUB' => 65.04,
    ];

    public function get($from, $to) {
        return isset($this->data[$from.$to]) ? $this->data[$from.$to] : false;
    }
}