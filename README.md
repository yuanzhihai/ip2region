# ip2region

基于ip2region(https://github.com/lionsoul2014/ip2region)开发 准确率99.9%的离线IP地址定位库，

### 标准化的数据格式
每条ip数据段都固定了格式：
```
_城市Id|国家|区域|省份|城市|ISP_
```

只有中国的数据精确到了城市，其他国家有部分数据只能定位到国家，后前的选项全部是0，已经包含了全部你能查到的大大小小的国家（请忽略前面的城市Id，个人项目需求）。

### 体积小

包含了全部的IP，生成的数据库文件ip2region.db只有几MB，最小的版本只有1.5MB，随着数据的详细度增加数据库的大小也慢慢增大，目前还没超过8MB。

### 查询速度快
全部的查询客户端单次查询都在0.x毫秒级别，内置了三种查询算法

### 修改
* 代码调整后，符合PSR2规范要求
* 去除全局常量定义，改为类的const变量
* 增加静态调用方法

### Composer 安装组件
```
composer require yzh52521/ip2region
```

### ip2region 使用范例

实例化调用
```
IpRegion = new \yzh52521\Ip2Region();

$info = IpRegion->btreeSearch('223.104.148.63');
var_dump($info, true);
```
静态方法调用
```
var_dump(IpRegion::search('223.104.148.63'));
var_dump(IpRegion::search('223.104.148.63', 'memory'));

// array (
//     'city_id' => 1015,
//     'region' => 中国|0|江苏省|南京市|移动
// )
```
