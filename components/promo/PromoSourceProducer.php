<?php

namespace components\promo;

use components\Request;
use models\SourceEnum;

class PromoSourceProducer
{

    /**
     * @param Request $request
     * @return PromoSourceInterface|null
     */
    public function get(Request $request)
    {
        switch ($request->get('from'))
        {
            case SourceEnum::DB:
                return new MysqlSourcePromo();
            case SourceEnum::DAEMON:
                return new DaemonSourcePromo();
            default:
                return null;
        }
    }

}