<?php

namespace components\promo;

interface PromoInterface
{
    public function getId();

    public function getName();

    public function getText();

    public function getPrice();
}