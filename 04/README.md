# 04

#### 出题思路

PHP是世界上最好的语言？什么都是有利有弊，PHP在Web安全方面对于新手来说，第一个认识的PHP的神奇的地方大概就是MD5相等吧，这次用的数组绕过，其实我想考的是那个科学计数法的问题的，但是不知道咋的没行通，让后就这样吧，先来一个开开胃，我也需要时间学习

#### 解题思路

这是一道代码审计的题目，页面中给出了代码，因此需要分析代码找到考点，ab不相等，但是MD5却相等，嗯=，数组绕过 = =。 

#### 使用方法

```shell

docker build -t [image_name] .

docker run -d --name [container_name] -p [port]:80 -e MYSQL_PASS="root" [image_name]

```

#### 答案

`danderlion{9H9_1s_s0_cRa2Y}`
