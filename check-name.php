<?php
//data/users/check-name.php
#1.连接数据库
  require("init.php");

#2.接收前端传过来的uname
  $uname=$_REQUEST["uname"];

#3.拼接sql，并查询uname是否存在
  $sql="SELECT * FROM register uname='$uname'";
  $result=mysqli_query($conn,$sql);

#4.根据查询的结果输出相应
  $row=mysqli_fetch_row($result);
  //抓取一条数据，即当前uname对应的数据
  if($row==null){
  //如果$row为空，即数据库中没有相同的用户名存在
    echo "通过";
  }else{
    echo "用户名称已存在";
  };
