<?php

namespace components\promo;

abstract class PromoAbstract implements PromoInterface
{
    //source data
    protected $data;
    protected $id, $name, $text, $price;

    public function __construct($data)
    {
        $this->data = $data;
        $this->prepare($data);
    }

    abstract function prepare($data);

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getPrice()
    {
        return $this->price;
    }

}