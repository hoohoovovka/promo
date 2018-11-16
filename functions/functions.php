<?php

namespace functions;

/**
 * Получение данных об объявлении из базы
 *
 * @param $id
 * @return array
 */
function getAdRecord($id)
{
    // пример ответа
    return [
        'id'       => $id,
        'name'     => 'AdName_FromMySQL',
        'text'     => 'AdText_FromMySQL',
        'keywords' => 'Some Keywords',
        'price'    => 10, // 10$
    ];
}

/**
 * Получение данных об объявлении из кеширующего демона
 *
 * @param $id
 * @return string
 *
 * колонки:
 * 0. id - объявления
 * 1. id - кампании
 * 2. id - пользователя
 * 3. название объявления
 * 4. текст объявления
 * 5. стоимость объявления в $
 */
function get_deamon_ad_info($id)
{
    // пример ответа: строка разделенная табуляцией
    return "{$id}\t235678\t12348\tAdName_FromDaemon\tAdText_FromDaemon\t11";
}
