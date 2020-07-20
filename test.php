<?php
/**
 * Created by PHP@大海 [三十年河东三十年河西,莫欺少年穷.!]
 * User: yuanzhihai
 * Date: 2020/7/20
 * Time: 12:43 下午
 * Author: PHP@大海 <396751927@qq.com>
 *       江城子 . 程序员之歌
 *
 *  十年生死两茫茫，写程序，到天亮。
 *      千行代码，Bug何处藏。
 *  纵使上线又怎样，朝令改，夕断肠。
 *
 *  领导每天新想法，天天改，日日忙。
 *     相顾无言，惟有泪千行。
 *  每晚灯火阑珊处，夜难寐，加班狂。
 */
$ip2region = new \yzh52521\Ip2Region();

$ip = '61.140.232.170';
echo PHP_EOL;
echo "查询IP：{$ip}" . PHP_EOL;
$info = $ip2region->btreeSearch($ip);
var_export($info);

echo PHP_EOL;
$info = $ip2region->memorySearch($ip);
var_export($info);
echo PHP_EOL;

// array (
//     'city_id' => 2163,
//     'region' => '中国|华南|广东省|深圳市|鹏博士',
// )
