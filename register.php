<?php
//data/users/register.php

#1.获取请求提交的数据
    $uname=$_REQUEST["uname"];
    //uname值就是前端页面中name属性的值
    $upwd=$_REQUEST["upwd"];
    //确认密码不用获取，获取一个密码就行
    $email=$_REQUEST["email"];
    $phone=$_REQUEST["phone"];
    $gender=$_REQUEST["gender"];

#2.连接到数据库
    require("init.php");

#3.拼sql语句并执行
    $sql="insert into register(uname,upwd,email,phone,gender)values('$uname','$upwd','$email','$phone','$gender')";
    //字段值 外面用双引号，里面用单引号
    $result=mysqli_query($conn,$sql);
    //执行sql语句

#4.根据执行结果给出响应
    if($result==true){ //函数返回值
        echo "注册成功";
    }else{
        echo "注册失败";
    };
