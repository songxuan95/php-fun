# php-fun

## 安装

> composer require songxuan/php-fun


### 下面写两个例子

```
<?php

require_once './vendor/autoload.php';
use SongXuan\PhpFun;

//生成32位以内随机字符串 
//$len 字符串长度，默认10位
echo PhpFun::uuid32($len);

//手机号正则
//$phone 手机号
echo PhpFun::isPhone($phone);


```
