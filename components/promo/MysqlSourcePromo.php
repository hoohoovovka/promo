<?php

namespace components\promo;

use function functions\getAdRecord;

class MysqlSourcePromo implements PromoSourceInterface
{
    /**
     * @param int $id
     * @return PromoInterface|null
     */
    public function get(int $id)
    {
        return new MysqlPromo(getAdRecord($id));
    }
}