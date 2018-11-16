<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

require_once 'config.php';
require_once 'bootstrap.php';

$request = new \components\Request($_GET);

$id = $request->get('id');
$producer = new \components\promo\PromoSourceProducer();
$source = $producer->get($request);

if ($source && $id) {
    $promo = $source->get($id);
    $name = $promo->getName();
    $text = $promo->getText();
    $price = \helpers\CurrencyConverter::convert($promo->getPrice(), \models\CurrencyEnum::USD, \models\CurrencyEnum::RUB);
    include 'output.php';
}
