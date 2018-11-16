<?php

namespace helpers;

use models\Currency;

class CurrencyConverter
{
    public static function convert($amount, $from, $to)
    {
        $currency = new Currency();
        $modifier = $currency->get($from, $to);
        return $modifier ? $amount*$modifier : false;
    }
}