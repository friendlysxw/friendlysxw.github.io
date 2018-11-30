---
title: http常用状态码
categories:
  - http
  - 后端
tags:
  - http状态码
comments: true
abbrlink: e7a38fcc
date: 2018-11-30 11:27:34
img:
---

## 常用的状态码如下：

![http_code1](e7a38fcc/http_code1.png)
![http_code1](e7a38fcc/http_code2.png)
![http_code1](e7a38fcc/http_code3.png)

常用返回的状态码：

~~~php
$_http_code = [
    200 => "OK",                   // 成功
    400 => "Bad Request",          // 请求数据有问题
    401 => "Unauthorized",         // 未登录
    403 => "Forbidden",            // 登录但没有权限
    404 => "Not Found",            // 请求数据没找到
];
~~~



