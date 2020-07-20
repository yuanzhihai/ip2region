# ip2region
ip2region - 准确率99.9%的离线IP地址定位库，0.0x毫秒级查询，ip2region.db数据库只有数MB，绑定和Binary,B树,内存三种查询算法。
### 标准化的数据格式
每条ip数据段都固定了格式：
```
_城市Id|国家|区域|省份|城市|ISP_
```

只有中国的数据精确到了城市，其他国家有部分数据只能定位到国家，后前的选项全部是0，已经包含了全部你能查到的大大小小的国家（请忽略前面的城市Id，个人项目需求）。
### 体积小

包含了全部的IP，生成的数据库文件ip2region.db只有几MB，最小的版本只有1.5MB，随着数据的详细度增加数据库的大小也慢慢增大，目前还没超过8MB。

#查询速度快
全部的查询客户端单次查询都在0.x毫秒级别，内置了三种查询算法
1. memory算法：整个数据库全部载入内存，单次查询都在0.1x毫秒内，C语言的客户端单次查询在0.00x毫秒级别。
2. binary算法：基于二分查找，基于ip2region.db文件，不需要载入内存，单次查询在0.x毫秒级别。
3. b-tree算法：基于btree算法，基于ip2region.db文件，不需要载入内存，单词查询在0.x毫秒级别，比binary算法更快。

###Composer 安装
```
composer require yzh52521/ip2region
```
#ip2region 使用
```
$ip2region = new \yzh52521\Ip2Region();

$ip = '101.105.35.57';

$info = $ip2region->btreeSearch($ip);

var_export($info, true);

// array (
//     'city_id' => 2163,
//     'region' => '中国|华南|广东省|深圳市|鹏博士',
// )
```
