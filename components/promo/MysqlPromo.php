<?php

namespace components\promo;

class MysqlPromo extends PromoAbstract
{
    public function prepare($data)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->text = isset($data['text']) ? $data['text'] : null;
        $this->price = isset($data['price']) ? $data['price'] : null;
    }
}