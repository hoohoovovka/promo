<?php

namespace helpers;

use components\Request;
use models\SourceEnum;

class SourceHelper {

    /**
     * @param Request $request
     * @return string|null
     */
    public static function getFunctionByRequest(Request $request)
    {
        $from = $request->get('from');
        return $from ? SourceEnum::getFunction($from) : null;
    }

}