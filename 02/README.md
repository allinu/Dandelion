# 02

#### 出题思路

sql注入的题目是老生常谈的问题，当让也是没个CTFer的基本功，因此除了这道题目

但是因为我是PHP新手，大家也是CTF新手，因此这道题目没有什么坑，常规解答就可以了

#### 解题思路

使用Sqlmap直接能够解答出正确结果

#### 使用方法
```shell

docker build -t [image_name] .

docker run -d --name [container_name] -p [port]:80 -e MYSQL_PASS="root" [image_name]

docker exec -it [container_name] /bin/bash

mysql

source /app/ctf.sql
```
#### 答案

`danderlion{sql_injection_?}`
