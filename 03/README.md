# 03

#### 出题思路

这道题目是一道文件包含的题目，因为作者不是很会操作环境，因此没有办法切换至系统目录，但是整体来说还是很不错的，涉及到了robot文件、base64解码

#### 解题思路

看到页面先点点链接，看看地址栏，发现了`?page=`这个参数，典型的文件包含，因此进行尝试，发现确实存在，然后不知道CTF文件在哪里，因此可能存在提示的就是`robot.txt`文件，因此查看此文件，发现`ctf.txt`查看文件内容，发现是空的，但是有背景，可能是颜色重叠了，因此`F12`查看，发现一串字符，上下有等号，因此为`base64`解码后得到`key`

#### 使用方法

```shell

docker build -t [image_name] .

docker run -d --name [container_name] -p [port]:80 -e MYSQL_PASS="root" [image_name]

```

#### 答案

`danderlion{ba3e64_1s_ve2y_n1cE_aNd_r0bo7}`
