<?php

namespace models;

class SourceEnum
{
    const DB = 'Mysql';
    const DAEMON = 'Daemon';

    private static $functions = [
        self::DB => 'getAdRecord',
        self::DAEMON => 'get_deamon_ad_info',
    ];

    /**
     * @param $key
     * @return mixed|null
     */
    public static function getFunction($key) {
        return isset(self::$functions[$key]) ? self::$functions[$key] : null;
    }

}