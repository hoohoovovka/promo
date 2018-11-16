<?php

namespace components\promo;

class DaemonPromo extends PromoAbstract
{
    public function prepare($data)
    {
        $result = mb_split("\t", $data);
        $this->id = isset($result[0]) ? $result[0] : null;
        $this->name = isset($result[3]) ? $result[3] : null;
        $this->text = isset($result[4]) ? $result[4] : null;
        $this->price = isset($result[5]) ? $result[5] : null;
    }
}