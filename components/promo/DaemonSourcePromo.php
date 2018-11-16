<?php

namespace components\promo;

use function functions\get_deamon_ad_info;

class DaemonSourcePromo implements PromoSourceInterface
{
    /**
     * @param int $id
     * @return PromoInterface|null
     */
    public function get(int $id)
    {
        return new DaemonPromo(get_deamon_ad_info($id));
    }
}