# Dandelion 蒲公英

- 这是一个简单地CTF题目集合，采用docker部署，后面将陆续添加题目
- 这也是一个学习项目，前期可能不太完善，作者还在不断学习的过程的过程中
- 希望有人能够及时指出题目中的不足，帮助我更好的成长，谢谢


- tmp 为开发时测试挂载的目录
  - `docker run -d --name test -v $PWD/app:/app -p 80:80 -p 3306:3306 -e MYSQL_PASS="your password" tutum/lamp`
- 01  JS相关的签到题目
- 02  Mysql的简单注入题目
- 03  文件包含
- 04  PHP代码审计

