<?php

namespace helpers;

use components\Logger;
use components\Request;

class RequestLogHelper
{
    public static function log(Request $request) {
        $function = SourceHelper::getFunctionByRequest($request);
        $id = (int)$request->get('id');
        if ($function && $id) {
            $time = time();
            $message = "[$time] $function(ID=$id)";
            Logger::getInstance()->log($message);
        }
    }

}