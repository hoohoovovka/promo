<?php

namespace components\promo;

interface PromoSourceInterface
{
    /**
     * @param int $id
     * @return PromoInterface|null
     */
    public function get(int $id);
}